<?php
/**
 * JQuarks Component Quizzes View
 * 
 * @version		$Id: view.html.php 59 2010-03-02 08:40:27Z fnaccache $
 * @author		IP-Tech Labs <labs@iptech-offshore.com> 
 * @copyright	2009-2010 IP-Tech
 * @package     JQuarks-Back-Office
 * @subpackage  Views
 * @link		http://www.iptechinside.com/labs/projects/show/jquarks
 * @since		0.1
 * @license     GNU/GPL2
 *    
 *    This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; version 2
 *  of the License.
 *
 *    This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA. 
 *  or see <http://www.gnu.org/licenses/>
 */

defined('_JEXEC') or die();

jimport('joomla.application.component.view');


class JQuarksViewQuizzes extends JView 
{
	function display($tpl = null)
	{
		$quizzes 				=& $this->get( 'Quizzes' );
		$affectedSets			=& $this->get('affectedSets') ;
		$pageNav 				= $this->get( 'pageNav' ) ;
		$lists 					=& $this->get( 'lists' ) ;
		
		$this->assignRef('affectedSets', $affectedSets);
		$this->assignRef('quizzes', $quizzes);
		$this->assignRef('pageNav', $pageNav);
		$this->assignRef('lists', $lists) ;
		
		// building the submenu
        JSubMenuHelper::addEntry( JText::_( 'JQUARKS_HOME' ), 'index.php?option=com_jquarks');
        JSubMenuHelper::addEntry( JText::_( 'QUIZZES' ), 'index.php?option=com_jquarks&view=quizzes', true);
        JSubMenuHelper::addEntry( JText::_( 'SETS_OF_QUESTIONS'), 'index.php?option=com_jquarks&view=setsofquestions');
        JSubMenuHelper::addEntry( JText::_( 'QUESTIONS' ), 'index.php?option=com_jquarks&view=questions');
        JSubMenuHelper::addEntry( JText::_( 'CATEGORIES' ), 'index.php?option=com_jquarks&view=categories');
        JSubMenuHelper::addEntry( JText::_( 'SESSIONS' ), 'index.php?option=com_jquarks&view=sessions');
        JSubMenuHelper::addEntry( JText::_( 'CANDIDATES' ), 'index.php?option=com_jquarks&view=candidates');
        JSubMenuHelper::addEntry( JText::_( 'PROFILES' ), 'index.php?option=com_jquarks&view=profiles');
		
		JToolBarHelper::title( JText::_( 'QUIZZES' ), 'generic.png' );
		JToolBarHelper::preferences('com_jquarks', '200', '570');
		JToolBarHelper::deleteList(JText::_('CONFIRM_SUPPRESSION_QUIZZES'));
		
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();
		JToolBarHelper::help('quizzes', true);
		
		parent::display($tpl);
	}
	
}