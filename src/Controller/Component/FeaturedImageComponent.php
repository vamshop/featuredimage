<?php

namespace FeaturedImage\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Vamshop\Core\Vamshop;

/**
 * FeaturedImage Component
 *
 * @package Vamshop.FileManager.Controller.Component
 */
class FeaturedImageComponent extends Component
{
    /**
     * startup
     */
    public function startup()
    {
        $controller = $this->_registry->getController();
        if ($controller->request->param('prefix') === 'admin') {
            $this->_adminTabs();
        }
    }

    /**
     * Hook admin tabs for controllers whom its primary model has MetaBehavior attached.
     */
    protected function _adminTabs()
    {
        $controller = $this->_registry->getController();
        $table = TableRegistry::get($controller->modelClass);
        if ($table &&
            !(
                $table->behaviors()
                    ->has('Meta') &&
                $table->behaviors()
                    ->has('FeaturedImage')
            )
        ) {
            return;
        }

        $title = __d('vamshop', 'Featured image');
        $element = 'FeaturedImage.admin/featured_image';
        $controllerName = $this->request->param('controller');
        Vamshop::hookAdminBox("Admin/$controllerName/add", $title, $element);
        Vamshop::hookAdminBox("Admin/$controllerName/edit", $title, $element);
    }
}
