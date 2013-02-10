<?php


namespace Ts\ExplainBundle\Domain;

class Document {

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var \Solr\Domain\Result\Document\Document
	 */
	protected $solrDocument;

	/**
	 * @var \Ob\HighchartsBundle\Highcharts\Highchart
	 */
	protected $chart;

	/**
	 * @param \Ob\HighchartsBundle\Highcharts\Highchart $char
	 */
	public function setChart($chart) {
		$this->chart = $chart;
	}

	/**
	 * @return \Ob\HighchartsBundle\Highcharts\Highchart
	 */
	public function getChart() {
		return $this->chart;
	}

	/**
	 * @param \Solr\Domain\Result\Document\Document $solrDocument
	 */
	public function setSolrDocument($solrDocument) {
		$this->solrDocument = $solrDocument;
	}

	/**
	 * @return \Solr\Domain\Result\Document\Document
	 */
	public function getSolrDocument() {
		return $this->solrDocument;
	}

	/**
	 * @param int $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
}
