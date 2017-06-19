<?php
namespace groundstack\gs_be_dark_theme\Hooks;

 /* * *************************************************************
  *  Copyright notice
  *
  *  (c) 2017 Christian Hackl <hackl.chris@googlemail.com>
  *
  *  This script is part of the TYPO3 project. The TYPO3 project is
  *  free software; you can redistribute it and/or modify
  *  it under the terms of the GNU General Public License as published by
  *  the Free Software Foundation; either version 2 of the License, or
  *  (at your option) any later version.
  *
  *  The GNU General Public License can be found at
  *  http://www.gnu.org/copyleft/gpl.html.
  *  A copy is found in the textfile GPL.txt and important notices to the license
  *  from the author is found in LICENSE.txt distributed with these scripts.
  *
  *  This script is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU General Public License for more details.
  *
  *  This copyright notice MUST APPEAR in all copies of the script!
  * ************************************************************* */

  use TYPO3\CMS\Backend\Clipboard\Clipboard;
  use TYPO3\CMS\Backend\Controller\PageLayoutController;
  use TYPO3\CMS\Backend\Utility\BackendUtility;
  use TYPO3\CMS\Backend\View\BackendLayoutView;
  use TYPO3\CMS\Core\Imaging\Icon;
  use TYPO3\CMS\Core\Imaging\IconFactory;
  use TYPO3\CMS\Core\SingletonInterface;
  use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
  use TYPO3\CMS\Core\Utility\GeneralUtility;
  use TYPO3\CMS\Recordlist\RecordList;


/**
 * Class/Function which adds the necessary ExtJS and pure JS stuff for the backend.
 *
 * @author Christian Hackl <hackl.chris@googlemail.com>
 * @package TYPO3
 * @subpackage gs_be_dark_theme
 */
class PageRenderer implements SingletonInterface
{
    /**
     * wrapper function called by hook (\TYPO3\CMS\Core\Page\PageRenderer->render-preProcess)
     *
     * @param array $parameters An array of available parameters
     * @param \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer The parent object that triggered this hook
     */
    public function addJSCSS(array $parameters, \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer)
    {
      $pageRenderer->addCssFile(ExtensionManagementUtility::extRelPath('gs_be_dark_theme') . 'Resources/Backend/Css/dark-main.css');
    }
}
