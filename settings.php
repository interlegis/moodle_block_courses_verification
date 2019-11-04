<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Configurações para o plugin Escola Modelo
 *
 * @package    enrol_evl
 * @author     Interlegis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $setting = new admin_setting_configcheckbox('block_escola_modelo/config_habilitar_evl',
        get_string('config_habilitar_evl_titulo', 'block_escola_modelo'),
        get_string('config_habilitar_evl_descricao', 'block_escola_modelo'), 0);
    $settings->add($setting);

    // Sigla da Escola na EVL
    $setting = new admin_setting_configtext('block_escola_modelo/config_sigla_evl',
        get_string('config_sigla_evl_titulo', 'block_escola_modelo'),
        get_string('config_sigla_evl_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 5);
    $settings->add($setting);

    // Nome da Casa Legislativa
    $setting = new admin_setting_configtext('block_escola_modelo/config_casa_legislativa',
        get_string('config_casa_legislativa_titulo', 'block_escola_modelo'),
        get_string('config_casa_legislativa_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 50);
    $settings->add($setting);

    // Nome do Município
    $setting = new admin_setting_configtext('block_escola_modelo/config_municipio',
        get_string('config_municipio_titulo', 'block_escola_modelo'),
        get_string('config_municipio_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 50);
    $settings->add($setting);

    // Sigla da UF
    $setting = new admin_setting_configtext('block_escola_modelo/config_uf',
        get_string('config_uf_titulo', 'block_escola_modelo'),
        get_string('config_uf_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 3);
    $settings->add($setting);

    // API Key desta instalação
    $setting = new admin_setting_configtext('block_escola_modelo/config_apikey',
        get_string('config_apikey_titulo', 'block_escola_modelo'),
        get_string('config_apikey_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 50);
    $settings->add($setting);

    // URL do Portal da EVL
    $setting = new admin_setting_configtext('block_escola_modelo/config_url_portal_evl',
        get_string('config_url_portal_evl_titulo', 'block_escola_modelo'),
        get_string('config_url_portal_evl_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 100);
    $settings->add($setting);

    // URL do servidor de Web Services da EVL
    $setting = new admin_setting_configtext('block_escola_modelo/config_url_ws_evl',
        get_string('config_url_ws_evl_titulo', 'block_escola_modelo'),
        get_string('config_url_ws_evl_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 100);
    $settings->add($setting);

    // URL da Central de Autenticação
    $setting = new admin_setting_configtext('block_escola_modelo/config_url_central_autenticacao',
        get_string('config_url_central_autenticacao_titulo', 'block_escola_modelo'),
        get_string('config_url_central_autenticacao_descricao', 'block_escola_modelo'), '', PARAM_TEXT, 100);
    $settings->add($setting);
}
