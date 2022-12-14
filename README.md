# Sentry

Moodle sentry is a quiz access plugin that notifies the teacher if any student is exibiting suspicious behavious such as switching tabs, copying text, pressing F12 etc dduring an exam.  

# Features
  * Easy to install and enable for each quiz
  * Notifies any suspicious behaviour by the student
  * Suspicious behaviour is logged discretely without alerting the student
  * Allows teachers to get a report of all suspicious bevahiours for each quiz

# Disclaimer
  * This plugin requires the use of a seperate webservice. As such it is recommended to contact your site admin to enable webservices and create a token for the service named quizaccess_sentry  


# Configuration
You can download this plugin from [Github](https://github.com/killerbee1998/moodle-quizaccess_sentry).


> After installing the plugin, you can use it by following:
  - Go to your course settings
  - Go to the Extra Restrictions on attempts section
  - Go to the Log Suspicious behaviour of students option
  - Select the option "must be acknowledged before starting an attempt"
  
```
  Dashboard->My courses->Your Course Name->Your Quizname ->Settings->Extra Restrictions on attempts->Enable plugin form Log Suspicious behaviour of students option
```

> Plugin Settings
<img width="100%" alt="4  Proctoring settings" src="readme_resources\Settings.png">

> Teacher View:
<img width="100%" alt="2  Attempt Quiz" src="readme_resources\Teacher.png">


> Report Page View
> 
> A Full report of all suspicious events in any quiz can be viewed by clicking the Report button in the quiz description. This report button is only available for Teachers and Site Admins.
<img width="100%" alt="2  Attempt Quiz" src="readme_resources\Report.png">

> Student View:
<img width="100%" alt="2  Attempt Quiz" src="readme_resources\Student.png">

## License

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <http://www.gnu.org/licenses/>.