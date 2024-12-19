<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Beneficiario;

class BeneficiarioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Beneficiario';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Beneficiario());

        $grid->column('id', __('Id'));
        $grid->column('codigo_boleta', __('Codigo boleta'));
        $grid->column('persona_tipo', __('Persona tipo'));
        $grid->column('carnet_identidad', __('Carnet identidad'));
        $grid->column('complemento_carnet_identidad', __('Complemento carnet identidad'));
        $grid->column('paterno', __('Paterno'));
        $grid->column('materno', __('Materno'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('persona_sexo', __('Persona sexo'));
        $grid->column('persona_sangre', __('Persona sangre'));
        $grid->column('fecha_nacimiento', __('Fecha nacimiento'));
        $grid->column('persona_departamento', __('Persona departamento'));
        $grid->column('persona_provincia', __('Persona provincia'));
        $grid->column('carnet_seguro', __('Carnet seguro'));
        $grid->column('id_administrador', __('Id administrador'));
        $grid->column('fecha_alta', __('Fecha alta'));
        $grid->column('persona_estado', __('Persona estado'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Beneficiario::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('codigo_boleta', __('Codigo boleta'));
        $show->field('persona_tipo', __('Persona tipo'));
        $show->field('carnet_identidad', __('Carnet identidad'));
        $show->field('complemento_carnet_identidad', __('Complemento carnet identidad'));
        $show->field('paterno', __('Paterno'));
        $show->field('materno', __('Materno'));
        $show->field('nombre', __('Nombre'));
        $show->field('persona_sexo', __('Persona sexo'));
        $show->field('persona_sangre', __('Persona sangre'));
        $show->field('fecha_nacimiento', __('Fecha nacimiento'));
        $show->field('persona_departamento', __('Persona departamento'));
        $show->field('persona_provincia', __('Persona provincia'));
        $show->field('carnet_seguro', __('Carnet seguro'));
        $show->field('id_administrador', __('Id administrador'));
        $show->field('fecha_alta', __('Fecha alta'));
        $show->field('persona_estado', __('Persona estado'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Beneficiario());

        $form->text('codigo_boleta', __('Codigo boleta'));
        $form->text('persona_tipo', __('Persona tipo'));
        $form->text('carnet_identidad', __('Carnet identidad'));
        $form->text('complemento_carnet_identidad', __('Complemento carnet identidad'));
        $form->text('paterno', __('Paterno'));
        $form->text('materno', __('Materno'));
        $form->text('nombre', __('Nombre'));
        $form->text('persona_sexo', __('Persona sexo'));
        $form->text('persona_sangre', __('Persona sangre'));
        $form->date('fecha_nacimiento', __('Fecha nacimiento'))->default(date('Y-m-d'));
        $form->text('persona_departamento', __('Persona departamento'));
        $form->text('persona_provincia', __('Persona provincia'));
        $form->text('carnet_seguro', __('Carnet seguro'));
        $form->text('id_administrador', __('Id administrador'));
        $form->date('fecha_alta', __('Fecha alta'))->default(date('Y-m-d'));
        $form->text('persona_estado', __('Persona estado'));

        return $form;
    }
}
