// ----------------------------------------------------
// User name (OS): Balinder Walia
// Date and time: 15/02/16, 20:35:54
// ----------------------------------------------------
// Method: _000_ReadMe_First
// Description
// Read me: These notes are provided for 4D Developers to understand Auto Update Code process and Components
// ----------------------------------------------------
// Please read all the Steps required below or in the Notes provided with this Sample 4D Application to understand Auto Update Code Component
// There are only a few simple Steps required to get the Auto Update Deployment System working for your End Users
// ----------------------------------------------------
// Step 1: Installing the Plugins required, Installing the Component, Installing the Sub components required by the main component: Unix Timestamp component, XML component & FTP Client component
// Step 2: Initialising the Deploy4D component in on Startup 4D Database Method
// Step 3: Adding Auto Update Menu in the top Menu Bar for End Users
// Step 4: Restart your application so component intialize
//Result: You are ready to provide your end user audience with "Your Application" which should allow them to Auto Update from within the Application
//
// Parameters
// ----------------------------------------------------

//Step 1

//Install Plugins & components

//Step 2

If (False)  //Step 2

If (False)
// ----------------------------------------------------
// User name (OS): Balinder Walia
// Date and time: 15/02/16, 20:27:04
// ----------------------------------------------------
// Method: On Startup (Sample 4D code)
// Description
// This code sample shows how to set up the Deploy4D component in your Database
// This is working code which you can copy and paste in your Database On Startup 4D method with minor changes. See below
// ----------------------------------------------------
// Please take a look at "_000_ReadMe_First" 4D method (Writing the code below is Step 4 as per _000_ReadMe_First)
// Please if you have already installed the Deploy4D component following Steps 1,2,3 mentioned in "_000_ReadMe_First" then please proceed with Step 4 below
// ----------------------------------------------------
// Parameters
// ----------------------------------------------------
End if 

C_OBJECT($Deploy4D_SettingsObj)
C_TEXT($applicationNameStr;$applicationFriendlyNameStr)

$applicationNameStr:="AutoUpdateDemo"  //also same as on the BUILD APPLICATION SCREEN You can also use $applicationNameStr:=Deploy4D_BuildAppName function if your wish to populate from build.xml
$applicationFriendlyNameStr:="Auto Update Demo"  //USER FRIENDLY APPLICATION NAME , For user dialogs and communicatation etc

//The application name and friendly name to the Deploy4D component
OB SET($Deploy4D_SettingsObj;"APPLICATION_NAME";$applicationNameStr)
OB SET($Deploy4D_SettingsObj;"APPLICATION_FRIENDLY_NAME";$applicationFriendlyNameStr)

//FTP SERVER USED TO UPLOAD, DOWNLOAD AND STORE UPDATES & VERSION CONTROL FILES
OB SET($Deploy4D_SettingsObj;"FTP_SERVER_HOST";"ftp.myftpserver.com")
OB SET($Deploy4D_SettingsObj;"FTP_SERVER_USER";"ftpusername")
OB SET($Deploy4D_SettingsObj;"FTP_SERVER_PASSWORD";"ftppassword")

//METHODS FOR INTERACTION BETWEEN HOST AND MATRIX DATABASE
//Create a method like AutoUpdate_VersionLocalGet which will be used to store the version number of the application.
//You can create a method an leave it empty as this method should be automatically maintained using METHOD SET CODE command by the component 
OB SET($Deploy4D_SettingsObj;"VERSION_CONTROL_METHOD";"_Deploy4D_VersionLocalGet")

If (True)  //menu bar no if you wish to show a menu bar when Auto Update Manager Dialogs appear for users
OB SET($Deploy4D_SettingsObj;"MENU_BAR_NO";1)
End if 

OB SET($Deploy4D_SettingsObj;"REPEAT_REMINDER_EVERY";"daily")  //daily | weekly (default) | monthly

//Finally Call 4D Method Deploy4D_OnStartup with the C_OBJECT as parameter and this should be pretty much what all is needed to manage the entire process
//Further developer settings can be set at the time of compile and building the application. Run Deploy4D_Developer 4D Method
Deploy4D_OnStartup ($Deploy4D_SettingsObj)

End if 

//Step 3

//Then create a menu item: Name it: Auto Update Manager or simply Update Manager, Keyword shortcut Apple+U on (Mac) and Ctrl+U (Windows)
//From menu execute method Deploy4D_Manager. You can also add a button on appropriate forms and call it "Check for updates". On button click call Deploy4D component method Deploy4D_Manager

//Step 4

//Reboot the App
//Restart your application so component intialize

//Result:
//You are ready to provide your end user audience with "Your Application" which should allow them to Auto Update from within the Application
