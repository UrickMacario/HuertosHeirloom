/**
 * Estos son los que se cargan como globales
 */
//noinspection ES6UnusedImports
import Alerta from './helpers/Alerta';
import Menu from './helpers/Menu'
/**
 * Aca se cargan los helpers o scripts que se necesiten
 */
import IniciarWeb from './helpers/IniciarWeb';
// import AjaxHelpers from './helpers/AjaxHelpers';

/**
 * Inicio
 */

IniciarWeb.init();
Menu.init();
// AjaxHelpers.init();

/**
 * Seteo de globales
 **/
// window.AjaxHelpers = AjaxHelpers;