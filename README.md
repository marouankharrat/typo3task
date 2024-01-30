# typo3task
Typo3 11 + Extension "Link of the month" display on a page

# Link of the month

New TYPO3 11 via composer


##Install
Run in Terminal <br />
`composer install`

##Folder structure in TYPO3 composer mode
Folders:<br />
* `/config`:<br />
siteconfig goes here (`/config/sites/_siteconfigname_/config.yaml`)
* `/public`: <br />
Holds `/typo3conf/` with extensions, `/fileadmin/`, `/typo3/` and `/typo3temp/`
* `/var/`:<br />
Holds TYPO3 Logs etc
* `/vendor/`:<br />
Holds all TYPO3 vendor dependencies


## To install Typo3 11 with composer

$composer create-project typo3/cms-base-distribution example-project-directory "^11"
and then
$touch public/FIRST_INSTALL


# Add Configuration Setup and Constants, Config, Page, Libraries, Default Template, Different Gridelements, With Bootstrap 5 as Frontend
# Install Extensions and extension-builder to create 2 extensions: mkhbasic (setup and Contants and Frontend files) and linkmonth (Our extension Link of th Month)
composer req friendsoftypo3/extension-builder
composer require mkhbasic/mkhbasic:@dev
composer req gridelementsteam/gridelements
composer req laxap/bootstrap-grids
# Clear Cache and Maintenance -> Analyze Database Structure

# Create our Extension, i used Extension Builder 
composer require linkmonth/linkmonth:@dev

# To make update of Extension
composer update linkmonth/linkmonth:@dev
# Clear Cache and Maintenance -> Analyze Database Structure



Access to Admin Panel:
Login: codered
Pwd: willkommen
