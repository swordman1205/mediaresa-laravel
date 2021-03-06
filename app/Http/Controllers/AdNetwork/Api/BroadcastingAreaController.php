<?php namespace App\Http\Controllers\AdNetwork\Api;

use App\BroadcastingArea;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;

class BroadcastingAreaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$broadcasting_areas = BroadcastingArea::where('name', 'ILIKE', '%' . Request::get('name') . '%')->get();

		return response()->json(compact('broadcasting_areas'));
	}

}
