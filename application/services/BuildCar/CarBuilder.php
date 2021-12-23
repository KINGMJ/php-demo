<?php


namespace Services\BuildCar;


abstract class CarBuilder
{
	//建造一个模型，你要给我一个顺序要求，就是组装顺序
	public abstract function setSequence(array $sequence): void;

	//设置完毕顺序后，就可以直接拿到这个车辆模型
	public abstract function getCarModel(): CarModel;
}
