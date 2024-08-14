<?php 

/** Register all custom post type */
require_once 'tax-constructor.php';
require_once 'cpt-constructor.php';

/** Create CPT **/
// new CustomPostType(name, single name, related taxonomies, dash icon, type, register name, 'show in menu', has archive, 'rute name )
new CustomPostType('Proyectos', 'proyecto', array('estado'), 'building', 'post', 'proyectos', false, true, 'proyectos' );
new CustomPostType('Apartamentos', 'apartamento', array('filtro', 'seccion'), 'admin-multisite', 'post', 'apartamentos', false, true, 'apartamentos' );


/** Taxonomies **/
// new CustomTaxonomy(name, true, rewrite, register name, array(tipo de publicación));
new CustomTaxonomy('Estado', true, 'estado', 'estado', array('proyectos'));
new CustomTaxonomy('filtro', true, 'filtro', 'filtro', array('apartamentos'));
new CustomTaxonomy('sección', true, 'seccion', 'seccion', array('apartamentos'));

