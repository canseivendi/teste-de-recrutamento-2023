<?php

namespace Core;

class Document
{
	private $title;
	private $description;
	private $keywords;
	private $links = [];
	private $styles = [];
	private $scripts = [];
	private $metas = [];

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
	}

	public function getKeywords()
	{
		return $this->keywords;
	}

	public function addLink($href, $rel)
	{
		$this->links[$href] = ['href' => $href, 'rel'  => $rel];
	}

	public function getLinks()
	{
		return $this->links;
	}

	public function addStyle($href, $rel = 'stylesheet', $media = 'screen')
	{
		$this->styles[$href] = [
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		];
	}

	public function getStyles()
	{
		return $this->styles;
	}

	public function addScript($href, $postion = 'header')
	{
		$this->scripts[$postion][$href] = $href;
	}

	public function getScripts($postion = 'header')
	{
		if (isset($this->scripts[$postion]))
			return $this->scripts[$postion];

		return [];
	}

	public function addMeta($property, $content)
	{
		$this->metas[] = ['property' 	=> $property, 'content'	=> $content];
	}

	public function getMetas()
	{
		return $this->metas;
	}
}
