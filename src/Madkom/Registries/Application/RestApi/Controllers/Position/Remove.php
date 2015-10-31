<?php
/**
 * Created by PhpStorm.
 * User: marek
 * Date: 11.09.15
 * Time: 09:57
 */

namespace Madkom\Registries\Application\RestApi\Controllers\Position;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class Remove
{
    public function positionById(Application $app, $positionId)
    {
        $getElement = $app['repositories.position']->find('Madkom\\Registries\\Domain\\Car\\Car', $positionId);
        $app['repositories.position']->deleteOne($getElement);

        return new Response('OK', 200);
    }
}