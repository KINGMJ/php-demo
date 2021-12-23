<?php


namespace Services\BuildCar;


class Director
{
	private $benzBuilder;
	private $bmwBuilder;

	public function __construct() {
		$this->bmwBuilder = new BMWBuilder();
		$this->benzBuilder = new BenzBuilder();
	}

	//A类型的奔驰车模型，先start，然后stop，其他什么引擎、喇叭一概没有
	public function getABenzModel(): CarModel {
		$sequence = [];
		array_push($sequence , 'start' , 'stop');
		$this->benzBuilder->setSequence($sequence);
		return $this->benzBuilder->getCarModel();
	}

	//B型号的奔驰车模型，是先发动引擎，然后启动，然后停止，没有喇叭
	public function getBBenzModel(): CarModel {
		$sequence = [];
		array_push($sequence , 'engineBoom' , 'start' , 'stop');
		$this->benzBuilder->setSequence($sequence);
		return $this->benzBuilder->getCarModel();
	}

	//C型号的宝马车是先按下喇叭（炫耀嘛），然后发送引擎，启动，然后停止
	public function getCBMWModel(): CarModel {
		$sequence = [];
		array_push($sequence , 'alarm' , 'engineBoom' , 'start' , 'stop');
		$this->bmwBuilder->setSequence($sequence);
		return $this->bmwBuilder->getCarModel();
	}
}
