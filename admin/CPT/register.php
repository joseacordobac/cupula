<?php 

/** Register all custom post type */
require_once 'cpt-constructor.php';
require_once 'tax-constructor.php';

/** Create CPT **/
// new CustomPostType(name, single name, related taxonomies, dash icon, type, register name, 'show in menu', has archive, 'rute name )
new CustomPostType('Proyectos', 'proyecto', array('status'), 'building', 'post', 'proyectos', false );
new CustomPostType('Apartamentos', 'apartamento', array('tipo'), 'admin-multisite', 'post', 'apartamentos', false );


/** Taxonomies **/
// new CustomTaxonomy(name, true, rewrite, register name, arrauy(acf));
// new CustomTaxonomy('Estado', false, 'status', 'status', array('proyectos'));


