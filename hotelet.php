<?php
class hotelet
{
	public $photo1;
	public $photo2;
	public $photo3;
	public $photo4;
	public $emri1;
	public $emri2;
	public $emri3;
	public $emri4;
	public $caption1;
	public $caption2;
	public $caption3;
	public $caption4;
	
	public function __construct($photo1,$emri1,$caption1,$photo2,$emri2,$caption2,$photo3,$emri3,$caption3,$photo4,$emri4,$caption4)
	{
		$this->photo1 = $photo1;
		$this->photo2 = $photo2;
		$this->photo3 = $photo3;
		$this->photo4 = $photo4;
		$this->emri1 = $emri1;
		$this->emri2 = $emri2;
		$this->emri3 = $emri3;
		$this->emri4 = $emri4;
		$this->caption1 = $caption1;
		$this->caption2 = $caption2;
		$this->caption3 = $caption3;
		$this->caption4 = $caption4;
	}
	public function output()
	{
		 
		$contain ='<div class="agileinfo-gallery">';
		$contain .='<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">';
        $contain .='<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="'.$this->photo1.'" data-lightbox="example-set" data-title="'.$this->caption1.'">';
        $contain .='<img src="'.$this->photo1.'" class="img-responsive zoom-img" alt=""/>';
		$contain .='<div class="agile-b-wrapper">';
		$contain .='<h5>'.$this->emri1.'</h5>';
		$contain .='</div></a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reserve</button></div>';		
		$contain .='<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">';
        $contain .='<a class="wow zoomIn animated" data-wow-delay=".9s" href="'.$this->photo2.'" data-lightbox="example-set" data-title="'.$this->caption2.'">';
        $contain .='<img src="'.$this->photo2.'" class="img-responsive zoom-img" alt=""/>';
		$contain .='<div class="agile-b-wrapper">';
		$contain .='<h5>'.$this->emri2.'</h5>';
		$contain .='</div></a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa2">Reserve</button></div>';
        $contain .='<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids"></div>';
        $contain .='<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids"></div>';
        $contain .='<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two wthree">';
        $contain .='<a class="wow zoomIn animated" data-wow-delay=".9s" href="'.$this->photo3.'" data-lightbox="example-set" data-title="'.$this->caption3.'">';
        $contain .='<img src="'.$this->photo3.'" class="img-responsive zoom-img" alt=""/>';
		$contain .='<div class="agile-b-wrapper">';
		$contain .='<h5>'.$this->emri3.'</h5>';
		$contain .='</div></a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa3">Reserve</button></div>';
		$contain .='<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two wthree">';
        $contain .='<a class="wow zoomIn animated" data-wow-delay=".9s" href="'.$this->photo4.'" data-lightbox="example-set" data-title="'.$this->caption4.'">';
        $contain .='<img src="'.$this->photo4.'" class="img-responsive zoom-img" alt=""/>';
		$contain .='<div class="agile-b-wrapper">';
		$contain .='<h5>'.$this->emri4.'</h5>';
		$contain .='</div></a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa4">Reserve</button></div>';
		$contain .='<div class="clearfix"> </div></div>';
		
		return $contain;
	}

}
?>
