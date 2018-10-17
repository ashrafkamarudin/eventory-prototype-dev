# Eventory Prototype 1

## Development

### To-Do

- [ ] login
	- [x] laravel auth facade
	- [x] install and configure laratrust
	- [x] make 3 roles
		- [x] superadmin
		- [x] organiser / administrator
		- [x] user

- [ ] Dashboard
	- [ ] 

- [ ] Manage Event [Admin]
	- [x] Create, Read, Update, Delete
		- [ ] must add daterange
	- [x] slugs
	- [x] published and drafts
	- [ ] tags
	- [ ] categories

- [ ] Manage Users
	- [x] Create, Read, Update
	- [x] assign/change roless

- [ ] Roles and Permission
	- [ ] Roles
		- [ ] Read and Update
	- [ ] Permission
		- [ ] Read and Update

- [ ] Reporting

- [ ] Homepage
	- [ ] featured event
	- [x] list recent event
		- [ ] sort event by start date, ascending

- [ ] Post
	- [x] view single event with slug
		- [x] comments
	- [ ] view list of all event
		- [ ] sort event by start date, ascending

- [ ] About Us
- [ ] Contact Us
- [ ] Privacy Policy
- [ ] error page
	- 404 page not fount
	- 500 internal server error
	- 503 no permission

### Laravel Command

- Artisan Make
	- php artisan make:model => create model. you can add -mcr or -a at the end. (-m, create new migration)
	- php artisan make:model -mcr => -m, --migration create new migration -c, --controller create new controller -r, --resource indicates if the generated controller should be a resource controller
	- php artisan make:model -a => for laravel 5.6^ -a, -all Generate a migration, factory and a resource controller
	- php artisan make:controller ControllerName --resource => create resource controller
	- php artisan make:migration create_tablename_table => create a migration name for the table

- Artisan Migrate
	- php artisan migrate => migrate database
	- php artisan migrate:refresh => rollback all migration then migrate

- Artisan clear cache
	- php artisan config:clear => clear configuration cache(.env)
	- php artisan cache:clear => clear application cache
	- php artisan route:clear => clear routes cache
	- php artisan view:clear => clear view cache

## IDEA DUMP

### Main Features
- Login
	- Personal Account
	- Organizer
		- Manage Users
	- super admin
- Event Posts
	- Blog style
	- with tags and categories
	- Comments(optional)
- Reporting

### Technology Stack
- Laravel
- AdminLTE3 (bootstrap) for admin
- Template by Bootstrap Temple for blog templete(user)
- Jquery

## Scope of Work

- Discovery Phase
	- Idea dump
	- Creative brief
	- Scope of work
- Design Phase
	- Wireframes
	- Design
	- Touch Up/Revisions
	- Database Architecture
- Development Phase
	- Homepage
	- Event Section
	- Login
	- Miscellaneous Pages
		- 404 page
		- 500 error
		- Contact pages
Deployment
