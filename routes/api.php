<?php
/**
 * Created by PhpStorm.
 * User: Davide
 * Date: 22/03/2018
 * Time: 18:22
 */

$prefix = "/api/v1";

$router->map( 'GET', $prefix.'/', 'ApiController#index', 'api_index');

# Routes API Product
$router->map( 'GET', $prefix.'/products', 'ProductController#index', 'products_index');
$router->map( 'GET', $prefix.'/products/[i:id]', 'ProductController#show', 'products_show');
$router->map( 'GET', $prefix.'/products/first', 'ProductController#first', 'product_first');
$router->map( 'GET', $prefix.'/products/last', 'ProductController#last', 'product_last');
$router->map( 'GET', $prefix.'/products/count', 'ProductController#count', 'products_count');
$router->map( 'GET', $prefix.'/products/search', 'ProductController#search', 'products_search');
$router->map( 'GET', $prefix.'/products/[i:id]/categories', 'ProductController#product_category', 'products_as_category');

$router->map( 'PUT', $prefix.'/products/[i:id]', 'ProductController#update', 'update_product');
$router->map( 'DELETE', $prefix.'/products/[i:id]', 'ProductController#delete', 'delete_product');
$router->map( 'POST', $prefix.'/products', 'ProductController#create', 'create_product');

# Routes API Category
$router->map( 'GET', $prefix.'/categories', 'CategoryController#read', 'read_categories');
$router->map( 'GET', $prefix.'/categories/[i:id]', 'CategoryController#read_one', 'read_one_category');
$router->map( 'GET', $prefix.'/categories/search', 'CategoryController#search', 'search_category');
$router->map( 'GET', $prefix.'/categories/first', 'CategoryController#readFirst', 'read_category_first');
$router->map( 'GET', $prefix.'/categories/last', 'CategoryController#readLast', 'read_category_last');
$router->map( 'GET', $prefix.'/categories/count', 'CategoryController#count', 'read_category_count');
$router->map( 'GET', $prefix.'/categories/[i:id]/products', 'CategoryController#read_categories_as_products', 'read_one_category_as_products');

$router->map( 'PUT', $prefix.'/categories/[i:id]', 'CategoryController#update', 'update_category');
$router->map( 'DELETE', $prefix.'/categories/[i:id]', 'CategoryController#delete', 'delete_category');
$router->map( 'POST', $prefix.'/categories', 'CategoryController#create', 'create_category');