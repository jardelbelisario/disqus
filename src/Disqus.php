<?php
namespace JBelisario\Disqus;

class Disqus{

  protected $shortname;

  public function __construct($shortname)
  {
    $this->shortname = $shortname;
  }

  public function render()
  {
    return view('disqus::coments')->with(['shortname' => $this->shortname]);
  }
}
