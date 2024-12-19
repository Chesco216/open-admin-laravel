<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Socio;

class SocioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Socio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Socio());

        $grid->column('id_socio', __('Id socio'));
        $grid->column('codigo_boleta', __('Codigo boleta'));
        $grid->column('carnet_seguro', __('Carnet seguro'));
        $grid->column('escalafon', __('Escalafon'));
        $grid->column('situacion', __('Situacion'));
        $grid->column('grado', __('Grado'));
        $grid->column('especialidad', __('Especialidad'));
        $grid->column('estado', __('Estado'));
        $grid->column('carnet_identidad', __('Carnet identidad'));
        $grid->column('extension', __('Extension'));
        $grid->column('nombres', __('Nombres'));
        $grid->column('paterno', __('Paterno'));
        $grid->column('materno', __('Materno'));
        $grid->column('observaciones', __('Observaciones'));
        $grid->column('fecha_nacimiento', __('Fecha nacimiento'));
        $grid->column('afiliacion', __('Afiliacion'));
        $grid->column('nacionalidad', __('Nacionalidad'));
        $grid->column('sangre', __('Sangre'));
        $grid->column('alergia', __('Alergia'));
        $grid->column('celular', __('Celular'));
        $grid->column('foto', __('Foto'));
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
        $show = new Show(Socio::findOrFail($id));

        $show->field('id_socio', __('Id socio'));
        $show->field('codigo_boleta', __('Codigo boleta'));
        $show->field('carnet_seguro', __('Carnet seguro'));
        $show->field('escalafon', __('Escalafon'));
        $show->field('situacion', __('Situacion'));
        $show->field('grado', __('Grado'));
        $show->field('especialidad', __('Especialidad'));
        $show->field('estado', __('Estado'));
        $show->field('carnet_identidad', __('Carnet identidad'));
        $show->field('extension', __('Extension'));
        $show->field('nombres', __('Nombres'));
        $show->field('paterno', __('Paterno'));
        $show->field('materno', __('Materno'));
        $show->field('observaciones', __('Observaciones'));
        $show->field('fecha_nacimiento', __('Fecha nacimiento'));
        $show->field('afiliacion', __('Afiliacion'));
        $show->field('nacionalidad', __('Nacionalidad'));
        $show->field('sangre', __('Sangre'));
        $show->field('alergia', __('Alergia'));
        $show->field('celular', __('Celular'));
        $show->field('foto', __('Foto'));
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
        $form = new Form(new Socio());

        $form->text('codigo_boleta', __('Codigo boleta'));
        $form->text('carnet_seguro', __('Carnet seguro'));
        $form->text('escalafon', __('Escalafon'));
        $form->text('situacion', __('Situacion'));
        $form->text('grado', __('Grado'));
        $form->text('especialidad', __('Especialidad'));
        $form->text('estado', __('Estado'));
        $form->text('carnet_identidad', __('Carnet identidad'));
        $form->text('extension', __('Extension'));
        $form->text('nombres', __('Nombres'));
        $form->text('paterno', __('Paterno'));
        $form->text('materno', __('Materno'));
        $form->text('observaciones', __('Observaciones'));
        $form->date('fecha_nacimiento', __('Fecha nacimiento'))->default(date('Y-m-d'));
        $form->text('afiliacion', __('Afiliacion'));
        $form->text('nacionalidad', __('Nacionalidad'));
        $form->text('sangre', __('Sangre'));
        $form->text('alergia', __('Alergia'));
        $form->text('celular', __('Celular'));
        $form->text('foto', __('Foto'));

        return $form;
    }
}
