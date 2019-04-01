<?php


	// datalist.php
	$Translation['quick search'] = "Быстрый поиск";
	$Translation['records x to y of z'] = "Документация <FirstRecord> to <LastRecord> of <RecordCount>";
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
	$Translation['saved filters instructions'] = "Скопируйте приведенный ниже код и вставьте его в файл HTML, чтобы сохранить только что определенный фильтр, чтобы вы могли вернуться к нему в любое время без необходимости переопределять его. Вы можете сохранить этот HTML-код на своем компьютере или на любом сервере и получить к нему доступ к этой предварительно отфильтрованной таблице.";
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
	$Translation['Cancel Selection'] = 'Отменить выбор';
	$Translation['Maximum records allowed to enable this feature is'] = 'Максимально допустимое количество записей для включения этой функции';
	$Translation['No matches found!'] = 'Совпадений не найдено!';
	$Translation['Start typing to get suggestions'] = 'Начните печатать, чтобы получить предложения.';

	// _dml.php
	$Translation['are you sure?'] = 'Вы уверены, что хотите удалить эту запись?';
	$Translation['add new record'] = 'Добавить новую запись';
	$Translation['update record'] = 'Обновить запись';
	$Translation['delete record'] = 'Удалить запись';
	$Translation['deselect record'] = 'Отмените выбор записи';
	$Translation["couldn't delete"] = 'Не удалось удалить запись из-за наличия <RelatedRecords> связанные записи в таблице[<TableName>]';
	$Translation['confirm delete'] = 'Эта запись имеет связанные записи <RelatedRecords> в таблице [<TableName>]. Вы все еще хотите удалить его? <Удалить> & nbsp; <Отменить>';
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
	$Translation['Find It'] = 'Найди это';
	$Translation['Previous'] = 'предыдущий';
	$Translation['Next'] = 'следующий';
	$Translation['Back'] = 'назад';

	// lib.php
	$Translation['select a table'] = "Прыгать, чтобы ...";
	$Translation['homepage'] = "Домашняя страница";
	$Translation['error:'] = "Ошибка:";
	$Translation['sql error:'] = "Ошибка SQL:";
	$Translation['query:'] = "запрос:";
	$Translation['< back'] = "назад";
	$Translation["if you haven't set up"] = "Если вы еще не настроили базу данных, вы можете сделать это, нажав<a href='setup.php'>здесь</a>.";
	$Translation['file too large']="Ошибка: загруженный файл превышает максимально допустимый размер <MaxSize> KB";
	$Translation['invalid file type']="Ошибка: этот тип файла не допускается. Только файлы <FileTypes> могут быть загружены";

	// setup.php
	$Translation['goto start page'] = "Вернуться на стартовую страницу";
	$Translation['no db connection'] = "Не удалось установить соединение с базой данных.";
	$Translation['no db name'] = "Не удалось получить доступ к базе данных с именем <DBName> на этом сервере.";
	$Translation['provide connection data'] = "Пожалуйста, предоставьте следующие данные для подключения к базе данных:";
	$Translation['mysql server'] = "MySQL сервер (хост)";
	$Translation['mysql username'] = "Имя пользователя MySQL";
	$Translation['mysql password'] = "MySQL пароль";
	$Translation['mysql db'] = "Имя базы данных";
	$Translation['connect'] = "соединять";
	$Translation['couldnt save config'] = "Не удалось сохранить данные подключения в 'config.php'.<br />Пожалуйста, убедитесь, что папка:<br />'".dirname(__FILE__)."'<br />доступно для записи(chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Настройка уже выполнена";
	$Translation['delete md5'] = "Если вы хотите снова запустить установку, сначала удалите файл 'setup.md5' из этой папки..";
	$Translation['table exists'] = "Таблица <b><TableName></b>существует, содержащий <NumRecords> записи.";
	$Translation['failed'] = "Не удалось";
	$Translation['ok'] = "Хорошо";
	$Translation['mysql said'] = "MySQL сказал:";
	$Translation['table uptodate'] = "Таблица актуальна.";
	$Translation['couldnt count'] = "Не удалось посчитать записи таблицы <b><TableName></b>";
	$Translation['creating table'] = "Создание таблицы <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "пожалуйста, подождите";

	// _view.php
	$Translation['tableAccessDenied']="Сожалею! У вас нет разрешения на доступ к этой таблице. Пожалуйста, свяжитесь с администратором.";

	// incCommon.php
	$Translation['not signed in']="Вы не вошли в аккаунт";
	$Translation['sign in']="Войти в систему";
	$Translation['signed as']="Подписано как";
	$Translation['sign out']="Выход";
	$Translation['admin setup needed']="Настройка администратора не была выполнена. Войдите в <a href=admin/> панель управления администратора </a>, чтобы выполнить настройку.";
	$Translation['db setup needed']="Настройка программы еще не была выполнена. Сначала войдите на <a href=setup.php> страницу настройки </a>.";
	$Translation['new record saved']="Новая запись была успешно сохранена.";
	$Translation['record updated']="Изменения были успешно сохранены.";

	// index.php
	$Translation['admin area']="Административная зона";
	$Translation['login failed']="Ваша предыдущая попытка входа не удалась. Попробуйте снова.";
	$Translation['sign in here']="Войти";
	$Translation['remember me']="Запомни меня";
	$Translation['username']="Имя пользователя";
	$Translation['password']="Пароль";
	$Translation['go to signup']="У вас нет имени пользователя? <br />&nbsp; <a href=membership_signup.php>Подпишите здесь</a>";
	$Translation['forgot password']="Забыли пароль?<a href=membership_passwordReset.php>Нажмите здесь</a>";
	$Translation['browse as guest']="<a href=index.php>Продолжить просмотр в качестве гостя</a>";
	$Translation['no table access']="У вас недостаточно прав для доступа к любой странице здесь. Пожалуйста, войдите сначала.";
	$Translation['signup']="Зарегистрироваться";

	// checkMemberID.php
	$Translation['user already exists']="Имя пользователя'<MemberID>' уже существует. Попробуйте другое имя пользователя.";
	$Translation['user available']="Имя пользователя '<MemberID>' доступно, и вы можете взять его.";
	$Translation['empty user']="Пожалуйста, сначала введите имя пользователя в поле, затем нажмите «Проверить наличие».";

	// membership_thankyou.php
	$Translation['thanks']="Спасибо за регистрацию!";
	$Translation['sign in no approval']="Если вы выбрали группу, которая не требует одобрения администратора, вы можете войти прямо сейчас<a href=index.php?signIn=1>здесь</a>.";
	$Translation['sign in wait approval']="Если вы выбрали группу, требующую одобрения администратора, пожалуйста, подождите, чтобы получить подтверждение по электронной почте.";

	// membership_signup.php
	$Translation['username empty']="Вы должны предоставить имя пользователя. Пожалуйста, вернитесь и введите имя пользователя";
	$Translation['password invalid']="Вы должны предоставить пароль из 4 или более символов без пробелов. Пожалуйста вернитесь и введите правильный пароль";
	$Translation['password no match']="Пароль не совпадает. Пожалуйста вернитесь и исправьте пароль";
	$Translation['username exists']="Имя пользователя уже существует. Пожалуйста вернитесь и выберите другое имя пользователя.";
	$Translation['email invalid']="Неверный адрес электронной почты. Пожалуйста вернитесь и исправьте свой адрес электронной почты.";
	$Translation['group invalid']="Неверная группа. Пожалуйста вернитесь и исправьте выбор группы.";
	$Translation['sign up here']="Войти здесь!";
	$Translation['registered? sign in']="Уже зарегистрирован? <a href=index.php?signIn=1>Войдите сюда</a>.";
	$Translation['sign up disabled']="К сожалению! Регистрация временно отключена администратором. Попробуйте позже.";
	$Translation['check availability']="Проверьте, доступно ли это имя пользователя";
	$Translation['confirm password']="Подтвердите Пароль";
	$Translation['email']="Адрес электронной почты";
	$Translation['group']="группа";
	$Translation['groups *']="Если вы решите зарегистрироваться в группе, отмеченной звездочкой (*), вы не сможете войти в систему, пока администратор не одобрит вас. Вы получите электронное письмо, когда будете одобрены.";
	$Translation['sign up']="Войти";

	// membership_passwordReset.php
	$Translation['password reset']="Страница сброса пароля";
	$Translation['password reset details']="Введите ваше имя пользователя или адрес электронной почты ниже. Затем мы отправим на вашу электронную почту специальную ссылку. После того, как вы перейдете по этой ссылке, вам будет предложено ввести новый пароль.";
	$Translation['password reset subject']="Инструкция по сбросу пароля";
	$Translation['password reset message']="Уважаемый участник, \ n Если вы запросили сброс / изменение пароля, перейдите по этой ссылке: \n <ResetLink> \n\n Если вы не запрашивали сброс / изменение пароля, игнорируйте это сообщение. \n\n С уважением.";
	$Translation['password reset ready']="На ваш зарегистрированный адрес электронной почты было отправлено письмо с инструкциями по сбросу пароля. Пожалуйста, следуйте инструкциям в этом сообщении электронной почты.<br /><br />Если вы не получили это письмо в течение 5 минут, попробуйте сбросить пароль еще раз и убедитесь, что вы ввели правильное имя пользователя или адрес электронной почты.";
	$Translation['password reset invalid']="Неправильное имя пользователя или пароль. <a href=membership_passwordReset.php>Try again</a>, или идти <a href=index.php>вернуться на главную страницу</a>.";
	$Translation['password change']="Страница смены пароля";
	$Translation['new password']="Новый пароль";
	$Translation['password reset done']="ваш пароль был успешно изменен. Вы можете<a href=index.php?signOut=1>войдите с новым паролем здесь</a>.";

    $Translation['Loading ...']='Загрузка ...';
    $Translation['No records found']='записей не найдено';
    $Translation['You can add children records after saving the main record first']='Вы можете добавить дочерние записи после сохранения основной записи первым';

    $Translation['ascending'] = 'по возрастанию';
    $Translation['descending'] = 'по убыванию';
    $Translation['then by'] = 'Затем';

	// membership_profile
	$Translation['Legend'] = 'легенда';
	$Translation['Table'] = 'Таблица';
	$Translation['Edit'] = 'редактировать';
	$Translation['View'] = 'Посмотреть';
	$Translation['Only your own records'] = 'Только ваши собственные записи';
	$Translation['All records owned by your group'] = 'Все записи принадлежат вашей группе';
	$Translation['All records'] = 'Все записи';
	$Translation['Not allowed'] = 'Не положено';
	$Translation['Your info'] = 'Ваша информация';
	$Translation['Hello user'] = 'Привет %s!';
	$Translation['Your access permissions'] = 'Ваши права доступа';
	$Translation['Update profile'] = 'Обновить профиль';
	$Translation['Update password'] = 'Обновить пароль';
	$Translation['Change your password'] = 'Поменяйте ваш пароль';
	$Translation['Old password'] = 'Прежний пароль';
	$Translation['Password strength: weak'] = 'Надежность пароля: Слабая';
	$Translation['Password strength: good'] = 'Надежность пароля: хорошо';
	$Translation['Password strength: strong'] = 'Надежность пароля: сильная';
	$Translation['Wrong password'] = 'Неправильный пароль';
	$Translation['Your profile was updated successfully'] = 'Ваш профиль был успешно обновлен';
	$Translation['Your password was changed successfully'] = 'Ваш пароль был успешно изменен';
	$Translation['Your IP address'] = 'Ваш IP адрес';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Записи для отображения';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Данные настройки';
	$Translation['Database Information'] = 'База данных Информация';
	$Translation['Admin Information'] = 'Информация администратора';
	$Translation['setup intro 1'] = 'Кажется, нет файла конфигурации. Это необходимо для работы приложения. <br> <br> Эта страница настройки поможет вам создать этот файл. Но в некоторых конфигурациях сервера это может не сработать. В этом случае вам может потребоваться настроить права доступа к папке или создать файл конфигурации вручную.';
	$Translation['setup intro 2'] = 'Добро пожаловать в ваше новое приложение AppGini! Прежде чем начать, нам нужна информация о вашей базе данных. Вам необходимо знать следующее, прежде чем продолжить:<ol><li>Сервер базы данных (host)</li><li>Имя базы данных</li><li>Database username</li><li>Пароль базы данных </ li> </ ol> Возможно, вышеупомянутые элементы были предоставлены вам вашим веб-хостинг-провайдером. Если у вас нет этой информации, вам необходимо связаться с ними или обратиться к их сервисной документации, прежде чем вы сможете продолжить здесь. Если вы готовы, давайте начнем!';
	$Translation['setup finished'] = '<b>Успешно</b><br><br>Ваше приложение AppGini установлено. Вот несколько советов, чтобы начать использовать его:';
	$Translation['setup next 1'] = 'Начните использовать приложение для добавления данных или работайте с существующими данными, если таковые имеются.';
	$Translation['setup next 2'] = 'Импортируйте существующие данные в ваше приложение из файла CSV.';
	$Translation['setup next 3'] = 'Перейдите на домашнюю страницу администратора, где вы можете изменить многие другие настройки приложения.';
	$Translation['db_name help'] = 'Имя базы данных, в которой вы хотите запустить приложение AppGini.';
	$Translation['db_server help'] = '<i>localhost</i> работает на большинстве серверов. Если нет, вы сможете получить эту информацию от вашего веб-хостинга.';
	$Translation['db_username help'] = 'Ваше имя пользователя MySQL';
	$Translation['db_password help'] = 'Ваш пароль MySQL';
	$Translation['username help'] = 'Укажите имя администратора, которое вы хотите использовать для доступа к области администратора. Должно быть четыре символа или больше.';
	$Translation['password help'] = 'Укажите надежный пароль для доступа в админку.';
	$Translation['email help'] = 'Введите адрес электронной почты, на который вы хотите отправлять уведомления администратора.';
	$Translation['Continue'] = 'Продолжить ...';
	$Translation['Lets go'] = 'Поехали!';
	$Translation['Submit'] = 'Отправить';
	$Translation['Hide'] = 'Скрыть помощь';
	$Translation['Database info is correct'] = '&#10003; Информация о базе данных верна!';
	$Translation['Database connection error'] = '&#10007; Ошибка подключения к базе данных!';
	$Translation['The following errors occured'] = 'Произошли следующие ошибки';
	$Translation['failed to create config instructions'] = 'Скорее всего, это связано с правами доступа к папкам, которые установлены для предотвращения создания файлов вашим веб-сервером. Не волнуйся! Вы все еще можете создать файл конфигурации вручную. <br> <br> Просто вставьте следующий код в текстовый редактор и сохраните файл как "config.php", затем загрузите его, используя FTP или любой другой метод, в папку% s на вашем сервере.';
	$Translation['Only show records having filterer'] = 'Показывать только записи, где %s является %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'У вас недостаточно прав для удаления этой записи';
	$Translation['Couldn\'t delete this record'] = 'Не удалось удалить эту запись';
	$Translation['The record has been deleted successfully'] = 'Запись была успешно удалена';
	$Translation['Couldn\'t save changes to the record'] = 'Не удалось сохранить изменения в записи';
	$Translation['Couldn\'t save the new record'] = 'Не удалось сохранить новую запись';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Больше';
	$Translation['Confirm deleting multiple records'] = 'Подтвердите удаление нескольких записей';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> записи будут удалены. Вы уверены, что хотите это сделать?';
	$Translation['Yes, delete them!'] = 'Да, удалите их!';
	$Translation['No, keep them.'] = 'Нет, оставь их.';
	$Translation['Deleting record <i> of <n>'] = 'Удаление записи <i> из <n>';
	$Translation['Delete progress'] = 'Удалить прогресс';
	$Translation['Show/hide details'] = 'Показать / скрыть детали';
	$Translation['Connection error'] = 'Ошибка соединения';
	$Translation['Add more actions'] = 'Добавить больше действий';
	$Translation['Update progress'] = 'Обновление прогресса';
	$Translation['Change owner'] = 'Сменить владельца';
	$Translation['Updating record <i> of <n>'] = 'Обновление записи <i> из <n>';
	$Translation['Change owner of <n> selected records to'] = 'Сменить владельца <n> выбранные записи в';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Имя пользователя <MemberID> уже существует или недействительно. Убедитесь, что вы вводите имя пользователя, содержащее от 4 до 20 допустимых символов.';
	$Translation['permalink'] = 'Постоянная ссылка';
	$Translation['invalid provider'] = 'Неверный провайдер!';
	$Translation['invalid url'] = 'Неверная ссылка!';
	$Translation['cant retrieve coordinates from url'] = 'Не могу получить координаты из URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Режим обслуживания включен! Вы можете отключить его на домашней странице администратора.';
	$Translation['unique field error'] = 'Это значение уже существует или недействительно. Пожалуйста, не забудьте указать уникальное действительное значение.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Показать все записи этого пользователя из "<tablename>" table';
	$Translation['show all group records from table'] = 'Показать все записи этой группы из "<tablename>" Таблица';
	$Translation['email this user'] = 'Отправить письмо этому пользователю';
	$Translation['email this group'] = 'Отправить эту группу по электронной почте';
	$Translation['owner'] = 'Владелец';
	$Translation['created'] = 'Создан';
	$Translation['last modified'] = 'Последнее изменение';
	$Translation['record has no owner'] = 'Эта запись не имеет назначенного владельца. Вы можете назначить владельца из админки.';
	$Translation['admin-only info'] = 'Приведенная выше информация отображается, потому что вы в настоящее время вошли в систему как администратор. Другие пользователи не увидят этого.';
	$Translation['discard changes confirm'] = 'Отменить изменения в этой записи?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Скрыть / Показать столбцы';
	$Translation['next column'] = 'Следующая колонка';
	$Translation['previous column'] = 'Предыдущая колонка';