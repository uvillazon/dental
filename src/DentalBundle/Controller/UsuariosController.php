<?php

namespace DentalBundle\Controller;



use DentalBundle\Repository\usuariosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;


class UsuariosController extends Controller
{
    /**
     * Obtener Obtener usuarios
     * @Rest\Post("/usuarios")
     * @ApiDoc(
     *   resource = true,
     *   description = "metodo para obtener usuarios",
     *   output = "Array",
     *   authentication = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the page is not found",
     *     403 = "Returned when permission denied"
     *   }
     * )
     */
    public function putUsuaeqweqweqwewqewriosPaginadosJJHHHAction()
    {
        /**
         * @var \Doctrine\ORM\EntityManager $em
         * @var usuariosRepository $repoUsuario
         */


        $em =  $this->get("doctrine.orm.entity_manager");
        $repoUsuario = $em->getRepository("DentalBundle:usuarios");
        $usuario = $repoUsuario->findAll();
//        $servicio = $this->get('sglabmedbundle.estaciones_trabajo_service');
        return array("success"=>true , "msg"=>"proceso ejecutado correctamente" , "data"=>$usuario);
    }
}
