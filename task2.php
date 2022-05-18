<?php

class Order extends Model
{
    public function manager()
    {
    	return $this->hasOne('App\Manager');
    }

	public function getOrders()
	{
		return Order::with(['manager'=> function($q) {
            $q->select([
                id,
                DB::raw("CONCAT(firstname, ' ', lastname)  AS fullname")
            ]);
    	}])->get()->take(50);
	}
}

class Manager extends Model
{

}