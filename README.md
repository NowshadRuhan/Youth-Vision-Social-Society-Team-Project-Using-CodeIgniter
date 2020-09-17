# Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter
 Youth vision project is a social society team work website. It's my old project, about 2018 project. In this project i used php as a programming language and codeigniter as a framework. Also used mysql as database. And also i create three panel for this project.Those are: User, Admin and Super-Admin.I will discuss about whole project in here.

### Youth-Vision-Admin-Dashboard:
<img align='center' src="https://github.com/NowshadRuhan/Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter/blob/master/Youth-Vision-Admin-dashboard.png" width="980" hight=800>

## About Project:
**Youth vision is one of social society team website, where user can signup-> which one will send admin as a member request. If admin confirm his registation, he/she will be team member of youth vision. And there are a one or two super admin who will make admin and maintain admin.**
**Lest youth vision user website.** 
### Youth-Vision-Home-User:
<img align='center' src="https://github.com/NowshadRuhan/Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter/blob/master/Youth-Vision-Home.png" width="480" hight=400>

## User site details:
In youth vision i used email verification in signup. So, that every user can create only one account and admin can find user and maintain them easily.Also user can post if they verified. User also have a user profile. Where he can see his/ger profile whole details. Now i, will tell whole functionality in user site...

1. verification
   - User can be member by verified hie/her email.
   - Email and user name will be unique if he want to be member.
2. If he/she is member
   - Every Member has a profile, they can edit their profile.
   - Member can post in event.
   - Member can post in Program.
   - And member can see whole details and they will notify by email every program of society.

### Youth-Vision-Signup-User:
<img align='center' src="https://github.com/NowshadRuhan/Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter/blob/master/youth-vision-signup.png" width="980" hight=700>

### User program view:
<img align='center' src="https://github.com/NowshadRuhan/Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter/blob/master/User-panel.png" width="680" hight=400>

## About admin site:
Youth vision website admin maintain member of their team. And admin has own profile, they can edit, add - program, user, and others. Now i, will tell whole functionality in admin site..

1. Admin maintain:
   - admin can maintain user who will be member.
   - admin can maintain program if program is posted by user.
   - admin can maintain event if event is created by user.
   - admin can add member, also can pouse user membership.
2. Admin functionality:
   - admin can add program, event, user and also co-admin.
   - admin can edit his own profile.
   - admin can contact super-admin.
   

<img align='center' src="https://github.com/NowshadRuhan/Youth-Vision-Social-Society-Team-Project-Using-CodeIgniter/blob/master/User_maintain-Admin.png" width="980" hight=700>


## About super-admin site:
Youth vision super admin maintain all admin, also they have all functionality like admin.Super admin can add admin and delete admin.

### About Database:
In this project i used 4tables for contain all data.The table are..
1. User/Admin/Super-admin creatation table.
2. Event table.
3. Notice table.
4. Program table.

**Relation between all table**
- [x] User table - Event table **[OneToMany]**
- [x] User table - Notice table **[OneToMany]**
- [x] User table - Program table **[OneToMany]**






