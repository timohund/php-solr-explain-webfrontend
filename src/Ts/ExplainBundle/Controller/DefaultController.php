<?php

namespace Ts\ExplainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ob\HighchartsBundle\Highcharts\Highchart;

use SolrExplain\Domain;

class DefaultController extends Controller {

	/**
	 * @Route("/")
	 * @Template()
	 */
	public function indexAction() {
		return array();
	}

	/**
	 * @Route("/explain")
	 * @Template()
	 */
	public function explainAction() {
		$content = $this->getRequest()->get('content');

		if($content != '') {
			$explainService = new \SolrExplain\Domain\Explanation\ExplainService();
			$impacts = $explainService->getFieldImpactsFromRawContent($content,4711,'auto');

			$ob = new Highchart();
			$ob->chart->renderTo('linechart');
			$ob->title->text('Score relevance');
			$ob->plotOptions->pie(array(
				'allowPointSelect'  => true,
				'cursor'    => 'pointer',
				'dataLabels'    => array('enabled' => false),
				'showInLegend'  => true
			));


			$data = array();
			foreach($impacts as $key => $impact) {
				$data[] = array($key, $impact);
			}

			$ob->series(array(array('type' => 'pie','name' => 'Relevance impact', 'data' => $data)));

			return $this->render(
				'TsExplainBundle:Default:explain.html.twig',
				array('chart' => $ob)
			);
		}
	}
}
