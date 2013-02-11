<?php

namespace Ts\ExplainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ob\HighchartsBundle\Highcharts\Highchart;

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
			$parser = new \Solr\Domain\Result\Parser();
			$result = $parser->parse($content);

			$id = 0;
			$explainDocuments = array();

			foreach($result->getDocumentCollection() as $document) {
					/** @var $document  \Solr\Domain\Result\Document\Document */
				$explainDocument = new \Ts\ExplainBundle\Domain\Document();

				$explainDocument->setId($id);
				$explainDocument->setSolrDocument($document);

				$explainService = new \Solr\Domain\Result\Explanation\ExplainService();
				$impacts = $explainService->getFieldImpactsFromRawContent(
					$document->getRawExplainData(),
					4711,
					'auto'
				);

				$ob = new Highchart();
				$ob->chart->renderTo('linechart-'.$explainDocument->getId());
				$ob->title->text('Score relevance');
				$ob->plotOptions->pie(array(
					'allowPointSelect'  => true,
					'cursor'    => 'pointer',
					'dataLabels'    => array('enabled' => true),
					'showInLegend'  => true,
				));

				$data = array();
				foreach($impacts as $key => $impact) {
					$impact =  round($impact,2);
					$data[] = array( $key, $impact, 'foo' );
				}

				$ob->series(array(array('type' => 'pie','name' => 'Relevance impact', 'data' => $data)));
				$explainDocument->setChart($ob);
				$explainDocuments[] = $explainDocument;

				$id++;
			}

			return $this->render(
				'TsExplainBundle:Default:explain.html.twig',
				array(
					'documents' => $explainDocuments,
					'result' => $result
				)
			);
		}
	}
}
