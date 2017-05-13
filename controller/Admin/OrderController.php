<?php
namespace Controller\Admin;

use Library\Controller;
use Model\Entity\Order;

class OrderController extends Controller {
    static $template ='Layout/base.html.php';

    function indexAction(){
        $userId = $_SESSION['user']['id'];

        $orders = (new Order)->getAllOrders();

        $status = [
            1=>'Pendiente',
            2=>'En proceso',
            3=>'En despacho',
            4=>'Entregado',
            5=>'Devolución',
            6=>'Anulado',
        ];
        return [
            'orders'=>$orders,
            'status'=>$status,
            'title'=>"Backend La Tienda > Manejo de Ordenes de Compra",
        ];
    }


    function detailsAction(){
        $id = (int)$this->get('id');
        $details = (new Order)->getOrderDetails($id)->fetchAll();

        return [
            'details'=>$details,
            'order'=>$id,
        ];
    }
}
