warning: in the working copy of 'app/Controllers/Signup.php', LF will be replaced by CRLF the next time Git touches it
warning: in the working copy of 'app/Views/Signup/new.php', LF will be replaced by CRLF the next time Git touches it
[1mdiff --git a/app/Controllers/Signup.php b/app/Controllers/Signup.php[m
[1mindex 9174dd1..b10e50a 100644[m
[1m--- a/app/Controllers/Signup.php[m
[1m+++ b/app/Controllers/Signup.php[m
[36m@@ -8,6 +8,9 @@[m [mclass Signup extends BaseController[m
 {[m
   public function new(): string[m
   {[m
[31m-    return view('Signup/new');[m
[32m+[m[32m    return view('Signup/new', [[m
[32m+[m[32m      'title'  =>   'Страница регистрации пользователей',[m
[32m+[m[32m      'description'   =>  'Описание страницы по description'[m
[32m+[m[32m    ]);[m
   }[m
 }[m
[1mdiff --git a/app/Views/Signup/new.php b/app/Views/Signup/new.php[m
[1mindex 593a95a..b3ad4a8 100644[m
[1m--- a/app/Views/Signup/new.php[m
[1m+++ b/app/Views/Signup/new.php[m
[36m@@ -3,7 +3,8 @@[m
 <?= $this->section("title") ?>Add new task><?= $this->endSection() ?>[m
 [m
 <?= $this->section("content") ?>[m
[31m-<h1>Add task</h1>[m
[32m+[m
[32m+[m[32m<h1>User registration</h1>[m
 [m
 <?php if (session()->has('errors')): ?>[m
 [m
