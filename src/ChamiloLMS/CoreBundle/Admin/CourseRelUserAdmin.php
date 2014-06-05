<?php

namespace ChamiloLMS\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use ChamiloLMS\CoreBundle\Entity\CourseRelUser;

use Knp\Menu\ItemInterface as MenuItemInterface;

/**
 * Class CourseAdmin
 * @package ChamiloLMS\CoreBundle\Admin
 */
class CourseRelUserAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('user', 'sonata_type_model', array(),
                array(
                    'admin_code' => 'sonata.user.admin.user'
                )
            )
            ->add('course')
            ->add('group')
            ->add('status', 'sonata_type_translatable_choice', array(
                    'choices' => CourseRelUser::getStatusList()
                )
            )
            ->add('relation_type', 'sonata_type_translatable_choice', array(
                'choices' => CourseRelUser::getRelationTypeList()
                )
            )
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('course')
            ->add('user')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('user')
            ->addIdentifier('course')
            ->addIdentifier('group')
            ->add('status', 'sonata_type_translatable_choice', array(
                    'choices' => CourseRelUser::getStatusList()
                )
            )
        ;
    }
}
