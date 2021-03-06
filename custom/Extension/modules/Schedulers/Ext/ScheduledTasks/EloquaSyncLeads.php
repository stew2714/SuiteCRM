<?php
/**
 *
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

require_once('custom/include/AccountSync/eloquaSyncLeads.php');
require_once('custom/include/AccountSync/eloquaSyncAccounts.php');

$job_strings[] = 'EloquaSyncLeads';
$job_strings[] = 'EloquaSyncAccounts';
$job_strings[] = 'EloquaGetHistory';
$job_strings[] = 'EloquaGetCampaigns';

function EloquaSyncLeads() {
    $sync = new eloquaSyncLeads();
    $sync->getContacts();
    return true;
}

function EloquaSyncAccounts() {
    $sync = new eloquaSyncAccounts();
    $sync->getAccounts();
    return true;
}

function EloquaGetHistory()
{
    require_once('custom/include/AccountSync/eloquaSync.php');
    $sync = new eloquaSync();

    echo '<pre>';
    foreach ($sync->activities as $activity) {
        if ($sync->defineExport($activity)) {
            break;
        }
    }
    echo '</pre>';
    return true;
}
function EloquaGetCampaigns()
{
    require_once('custom/include/AccountSync/eloquaSync.php');
    $sync = new eloquaSync();
    $sync->getCampaignList();
    return true;
}
