<?php

	// IMPORTANT:
	// ==========
	// If you wish to translate the interface of AppGini,
	// DO NOT TRANSLATE THIS FILE.
	//
	// Instead, you should translate the language.php file.
	// =====================================================


	// general config
	// location of uploads folder
	$Translation['ImageFolder'] = './images/';

	// datalist.php
	$Translation['quick search'] = "Быстрый поиск";
	$Translation['records x to y of z'] = "Записывает <FirstRecord> в <LastRecord> из <RecordCount>";
	$Translation['filters'] = "Фильтры";
	$Translation['filter'] = "Фильтр";
	$Translation['filtered field'] = "Фильтрованное поле";
	$Translation['comparison operator'] = "Оператор сравнения";
	$Translation['comparison value'] = "Значение сравнения";
	$Translation['and'] = "И";
	$Translation['or'] = "Или";
	$Translation['equal to'] = "Равно";
	$Translation['not equal to'] = "Не равно";
	$Translation['greater than'] = "Лучше чем";
	$Translation['greater than or equal to'] = "Больше или равно";
	$Translation['less than'] = "Меньше, чем";
	$Translation['less than or equal to'] = "Меньше или равно";
	$Translation['like'] = "Подобно";
	$Translation['not like'] = "Не как";
	$Translation['is empty'] = "Пустой";
	$Translation['is not empty'] = "Не пусто";
	$Translation['apply filters'] = "Применить фильтры";
	$Translation['save filters'] = "Сохранить и применить фильтры";
	$Translation['saved filters title'] = "HTML-код для примененных фильтров";
	$Translation['saved filters instructions'] = "Скопируйте приведенный ниже код и вставьте его в файл HTML, чтобы сохранить только что определенный фильтр, чтобы вы могли вернуться к нему в любое время без необходимости переопределять его. Вы можете сохранить этот HTML-код на своем компьютере или на любом сервере и получить доступ к этому предварительно отфильтрованному табличному представлению через него.";
	$Translation['hide code'] = "Скрыть этот код";
	$Translation['printer friendly view'] = "Версия для печати";
	$Translation['save as csv'] = "Загрузить как файл CSV (значения, разделенные запятыми)";
	$Translation['edit filters'] = "Редактировать фильтры";
	$Translation['clear filters'] = "Очистить фильтры";
	$Translation['order by'] = 'Сортировать по';
	$Translation['go to page'] = 'Перейти на страницу:';
	$Translation['none'] = 'Никто';
	$Translation['Select all records'] = 'Выбрать все записи';
	$Translation['With selected records'] = 'С выбранными записями';
	$Translation['Print Preview Detail View'] = 'Предварительный просмотр печати';
	$Translation['Print Preview Table View'] = 'Предварительный просмотр таблицы';
	$Translation['Print'] = 'Распечатать';
	$Translation['Cancel Printing'] = 'Отменить печать';
	$Translation['Cancel Selection'] = 'Cancel Selection';
	$Translation['Maximum records allowed to enable this feature is'] = 'Максимально допустимое количество записей для включения этой функции';
	$Translation['No matches found!'] = 'Совпадений не найдено!';
	$Translation['Start typing to get suggestions'] = 'Начните печатать, чтобы получить предложения.';

	// _dml.php
	$Translation['are you sure?'] = 'Вы уверены, что хотите удалить эту запись?';
	$Translation['add new record'] = 'Добавить новую запись';
	$Translation['update record'] = 'Обновить запись';
	$Translation['delete record'] = 'Удалить запись';
	$Translation['deselect record'] = 'Отменить выбор записи';
	$Translation["couldn't delete"] = 'Не удалось удалить запись из-за наличия <RelatedRecords> связанные записи в таблице [<TableName>]';
	$Translation['confirm delete'] = 'Эта запись имеет <RelatedRecords> связанных записей в таблице [<TableName>]. Вы все еще хотите удалить его? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Да';
	$Translation['no'] = 'Нет';
	$Translation['pkfield empty'] = ' Поле является полем первичного ключа и не может быть пустым.';
	$Translation['upload image'] = 'Загрузить новый файл ';
	$Translation['select image'] = 'Выберите изображение ';
	$Translation['remove image'] = 'Удалить файл';
	$Translation['month names'] = 'Январь, февраль, март, апрель, май, июнь, июль, август, сентябрь, октябрь, ноябрь, декабрь';
	$Translation['field not null'] = 'Вы не можете оставить это поле пустым.';
	$Translation['*'] = '*';
	$Translation['today'] = 'сегодня';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Удерживайте клавишу CTRL, чтобы выбрать несколько элементов из списка выше.';
	$Translation['Save New'] = 'Сохранить новый';
	$Translation['Save As Copy'] = 'Сохранить как копию';
	$Translation['Deselect'] = 'отменить';
	$Translation['Add New'] = 'Добавить новое';
	$Translation['Delete'] = 'удалять';
	$Translation['Cancel'] = 'отменить';
	$Translation['Print Preview'] = 'Предварительный просмотр';
	$Translation['Save Changes'] = 'Сохранить изменения';
	$Translation['CSV'] = 'Сохранить CSV';
	$Translation['Reset Filters'] = 'Показать все';
	$Translation['Find It'] = 'Найти';
	$Translation['Previous'] = 'предыдущий';
	$Translation['Next'] = 'следующий';
	$Translation['Back'] = 'назад';

	// lib.php
	$Translation['select a table'] = "Прыгать, чтобы ...";
	$Translation['homepage'] = "Домашняя страница";
	$Translation['error:'] = "ошибка:";
	$Translation['sql error:'] = "Ошибка SQL:";
	$Translation['query:'] = "Query:";
	$Translation['< back'] = "назад";
	$Translation["if you haven't set up"] = "Если вы еще не настроили базу данных, вы можете сделать это, нажав <a href='setup.php'>сюда</a>.";
	$Translation['file too large']="Ошибка: загруженный файл превышает максимально допустимый размер <MaxSize> КБ";
	$Translation['invalid file type']="Ошибка: этот тип файла не допускается. Только файлы <FileTypes> могут быть загружены";

	// setup.php
	$Translation['goto start page'] = "Вернуться на стартовую страницу";
	$Translation['no db connection'] = "Не удалось установить соединение с базой данных.";
	$Translation['no db name'] = "Не удалось получить доступ к базе данных с именем <DBName> на этом сервере.";
	$Translation['provide connection data'] = "Пожалуйста, предоставьте следующие данные для подключения к базе данных:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL Username";
	$Translation['mysql password'] = "MySQL password";
	$Translation['mysql db'] = "Database name";
	$Translation['connect'] = "Connect";
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br>Please make sure that the folder:<br>'".dirname(__FILE__)."'<br>is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "Table <b><TableName></b> exists, containing <NumRecords> records.";
	$Translation['failed'] = "Failed";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "Table is up-to-date.";
	$Translation['couldnt count'] = "Couldn't count records of table <b><TableName></b>";
	$Translation['creating table'] = "Creating table <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Please wait";

	// _view.php
	$Translation['tableAccessDenied']="Sorry! You don't have permission to access this table. Please contact the admin.";

	// incCommon.php
	$Translation['not signed in']="You are not signed in";
	$Translation['sign in']="Sign In";
	$Translation['signed as']="Signed in as";
	$Translation['sign out']="Sign Out";
	$Translation['admin setup needed']="Admin setup was not performed. Please log in to the <a href=admin/>admin control panel</a> to perform the setup.";
	$Translation['db setup needed']="Program setup was not performed yet. Please log in to the <a href=setup.php>setup page</a> first.";
	$Translation['new record saved']="The new record has been saved successfully.";
	$Translation['record updated']="The changes have been saved successfully.";

	// index.php
	$Translation['admin area']="Admin Area";
	$Translation['login failed']="Your previous login attempt failed. Try again.";
	$Translation['sign in here']="Sign In Here";
	$Translation['remember me']="Remember me";
	$Translation['username']="Username";
	$Translation['password']="Password";
	$Translation['go to signup']="Don't have a username? <br>&nbsp; <a href=membership_signup.php>Sign up here</a>";
	$Translation['forgot password']="Forgot your password? <a href=membership_passwordReset.php>Click here</a>";
	$Translation['browse as guest']="<a href=index.php>Continue browsing as a guest</a>";
	$Translation['no table access']="You don't have enough permissions to access any page here. Please sign in first.";
	$Translation['signup']="Sign up";

	// checkMemberID.php
	$Translation['user already exists']="Username '<MemberID>' already exists. Try another username.";
	$Translation['user available']="Username '<MemberID>' is available and you can take it.";
	$Translation['empty user']="Please type a username in the box first then click 'Check availability'.";

	// membership_thankyou.php
	$Translation['thanks']="Thank you for signing up!";
	$Translation['sign in no approval']="If you have chosen a group that doesn't require admin approval, you can sign in right now <a href=index.php?signIn=1>here</a>.";
	$Translation['sign in wait approval']="If you have chosen a group that requires admin approval, please wait for an email confirming your approval.";

	// membership_signup.php
	$Translation['username empty']="You must provide a username. Please go back and type a username";
	$Translation['password invalid']="You must provide a password of 4 characters or more, without spaces. Please go back and type a valid password";
	$Translation['password no match']="Password doesn't match. Please go back and correct the password";
	$Translation['username exists']="Username already exists. Please go back and choose a different username.";
	$Translation['email invalid']="Invalid email address. Please go back and correct your email address.";
	$Translation['group invalid']="Invalid group. Please go back and correct the group selection.";
	$Translation['sign up here']="Sign Up Here!";
	$Translation['registered? sign in']="Already registered? <a href=index.php?signIn=1>Sign in here</a>.";
	$Translation['sign up disabled']="Sorry! Sign-up is temporarily disabled by admin. Try again later.";
	$Translation['check availability']="Check if this username is available";
	$Translation['confirm password']="Confirm Password";
	$Translation['email']="Email Address";
	$Translation['group']="Group";
	$Translation['groups *']="If you choose to sign up to a group marked with an asterisk (*), you won't be able to log in until the admin approves you. You'll receive an email when you are approved.";
	$Translation['sign up']="Sign Up";

	// membership_passwordReset.php
	$Translation['password reset']="Password Reset Page";
	$Translation['password reset details']="Enter your username or email address below. We'll then send a special link to your email. After you click on that link, you'll be asked to enter a new password.";
	$Translation['password reset subject']="Password reset instructions";
	$Translation['password reset message']="Dear member, \n If you have requested to reset/change your password, please click on this link: \n <ResetLink> \n\n If you didn't request a password reset/change, please ignore this message. \n\n Regards.";
	$Translation['password reset ready']="An email with password reset instructions has been sent to your registered email address. Please follow the instructions in that email message.<br><br>If you don't receive this email within 5 minutes, try resetting your password again, and make sure you enter a correct username or email address.";
	$Translation['password reset invalid']="Invalid username or password. <a href=membership_passwordReset.php>Try again</a>, or go <a href=index.php>back to homepage</a>.";
	$Translation['password change']="Password Change Page";
	$Translation['new password']="New password";
	$Translation['password reset done']="Your password was changed successfully. You can <a href=index.php?signOut=1>log in with the new password here</a>.";

	$Translation['Loading ...']='Loading ...';
	$Translation['No records found']='No records found';
	$Translation['You can add children records after saving the main record first']='You can add child records after saving the main record first';

	$Translation['ascending'] = 'Ascending';
	$Translation['descending'] = 'Descending';
	$Translation['then by'] = 'Then by';

	// membership_profile
	$Translation['Legend'] = 'Legend';
	$Translation['Table'] = 'Table';
	$Translation['Edit'] = 'Edit';
	$Translation['View'] = 'View';
	$Translation['Only your own records'] = 'Only your own records';
	$Translation['All records owned by your group'] = 'All records owned by your group';
	$Translation['All records'] = 'All records';
	$Translation['Not allowed'] = 'Not allowed';
	$Translation['Your info'] = 'Your info';
	$Translation['Hello user'] = 'Hello %s!';
	$Translation['Your access permissions'] = 'Your access permissions';
	$Translation['Update profile'] = 'Update profile';
	$Translation['Update password'] = 'Update password';
	$Translation['Change your password'] = 'Change your password';
	$Translation['Old password'] = 'Old Password';
	$Translation['Password strength: weak'] = 'Password strength: weak';
	$Translation['Password strength: good'] = 'Password strength: good';
	$Translation['Password strength: strong'] = 'Password strength: strong';
	$Translation['Wrong password'] = 'Wrong password';
	$Translation['Your profile was updated successfully'] = 'Your profile was updated successfully';
	$Translation['Your password was changed successfully'] = 'Your password was changed successfully';
	$Translation['Your IP address'] = 'Your IP address';

	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Records to display';

	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Setup Data';
	$Translation['Database Information'] = 'Database Information';
	$Translation['Admin Information'] = 'Admin Information';
	$Translation['setup intro 1'] = 'There doesn\'t seem to be a configuration file. This is necessary for the application to work.<br><br>This setup page will help you create that file. But in some server configurations this might not work. In that case you might need to adjust the folder permissions, or create the config file manually.';
	$Translation['setup intro 2'] = 'Welcome to your new AppGini application! Before getting started, we need some information about your database. You will need to know the following before proceeding:<ol><li>Database server (host)</li><li>Database name</li><li>Database username</li><li>Database password</li></ol>The above items were probably supplied to you by your web hosting provider. If you do not have this information, then you will need to contact them or refer to their service documentation before you can continue here. If you\'re ready, let\'s start!';
	$Translation['setup finished'] = '<b>Success!</b><br><br>Your AppGini application has been installed. Here are some suggestions to begin using it:';
	$Translation['setup next 1'] = 'Start using your application to add data, or work with existing data, if any.';
	$Translation['setup next 2'] = 'Import existing data into your application from a CSV file.';
	$Translation['setup next 3'] = 'Go to the admin homepage where you can change many other application settings.';
	$Translation['db_name help'] = 'The name of the database you want to run your AppGini application in.';
	$Translation['db_server help'] = '<i>localhost</i> works on most servers. If not, you should be able to get this info from your web hosting provider.';
	$Translation['username help'] = 'Specify the admin username you\'d like to use to access the admin area. Must be 4 characters or more.';
	$Translation['password help'] = 'Specify a strong password to access the admin area.';
	$Translation['email help'] = 'Enter the email address where you want admin notifications to be sent.';
	$Translation['Continue'] = 'Continue ...';
	$Translation['Lets go'] = 'Let\'s go!';
	$Translation['Submit'] = 'Submit';
	$Translation['Hide'] = 'Hide help';
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'The following errors occured';
	$Translation['failed to create config instructions'] = 'This is most probably due to folder permissions that are set to prevent creating files by your web server. Don\'t worry! You can still create the config file manually.<br><br>Just paste the following code into a text editor and save the file as "config.php", then upload it using FTP or any other method to the folder %s on your server.';
	$Translation['Only show records having filterer'] = 'Only show records where %s is %s';

	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'You don\'t have enough permissions to delete this record';
	$Translation['Couldn\'t delete this record'] = 'Couldn\'t delete this record';
	$Translation['The record has been deleted successfully'] = 'The record has been deleted successfully';
	$Translation['Couldn\'t save changes to the record'] = 'Couldn\'t save changes to the record';
	$Translation['Couldn\'t save the new record'] = 'Couldn\'t save the new record';

	/* Added in AppGini 5.30 */
	$Translation['More'] = 'More';
	$Translation['Confirm deleting multiple records'] = 'Confirm deleting multiple records';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> records will be deleted. Are you sure you want to do this?';
	$Translation['Yes, delete them!'] = 'Yes, delete them!';
	$Translation['No, keep them.'] = 'No, keep them.';
	$Translation['Deleting record <i> of <n>'] = 'Deleting record <i> of <n>';
	$Translation['Delete progress'] = 'Delete progress';
	$Translation['Show/hide details'] = 'Show/hide details';
	$Translation['Connection error'] = 'Connection error';
	$Translation['Add more actions'] = 'Add more actions';
	$Translation['Update progress'] = 'Update progress';
	$Translation['Change owner'] = 'Change owner';
	$Translation['Updating record <i> of <n>'] = 'Updating record <i> of <n>';
	$Translation['Change owner of <n> selected records to'] = 'Change owner of <n> selected records to';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Username <MemberID> already exists or is invalid. Make sure you provide a username containing 4 to 20 valid characters.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Invalid provider!';
	$Translation['invalid url'] = 'Invalid URL!';
	$Translation['cant retrieve coordinates from url'] = 'Can\'t retrieve coordinates from URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Maintenance mode is enabled! You can disable it from the admin home page.';
	$Translation['unique field error'] = 'This value already exists or is invalid. Please make sure to specify a unique valid value.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Show all records of this user from "<tablename>" table';
	$Translation['show all group records from table'] = 'Show all records of this group from "<tablename>" table';
	$Translation['email this user'] = 'Email this user';
	$Translation['email this group'] = 'Email this group';
	$Translation['owner'] = 'Owner';
	$Translation['created'] = 'Created';
	$Translation['last modified'] = 'Last modified';
	$Translation['record has no owner'] = 'This record has no assigned owner. You can assign an owner from the admin area.';
	$Translation['admin-only info'] = 'The above info is displayed because you are currently signed in as the super admin. Other users won\'t see this.';
	$Translation['discard changes confirm'] = 'Discard changes to this record?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Hide/Show columns';
	$Translation['next column'] = 'Next column';
	$Translation['previous column'] = 'Previous column';

