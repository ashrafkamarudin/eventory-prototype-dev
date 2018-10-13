# Eventory Prototype 1

## Development

### To-Do

- [ ] login
	- [x] laravel auth facade
	- [ ] install and configure laratrust
	- [ ] make 3 roles
		- [ ] superadmin
		- [ ] organiser
		- [ ] user

- [ ] Dashboard
	- [ ] 

- [ ] Manage Event [Admin]
	- [ ] Interface
		- [x] Index
		- [x] Add
		- [x] Edit
	- [ ] Resource Controller
		- [x] index()
			- [x] pagination - dataTable
		- [ ] create()
			- [x] return create page
			- [ ] add tags
			- [ ] add categories
		- [x] store()
			- [x] add slug
			- [x] add image
			- [ ] add tags
			- [ ] add categories
			- [x] insert into db
		- [ ] show()
		- [x] edit()
			- [x] return edit page with saved data
		- [x] update()
			- [x] update slug
			- [x] update image
			- [ ] update tags
			- [ ] update categories
			- [x] update into db
		- [x] destroy()
			- [ ] delete image
- [ ] Homepage
	- [ ] featured event
	- [x] list recent event
		- [ ] sort event by start date, ascending
- [ ] Post
	- [x] view single event with slug
		- [x] added comment
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

## IDEA DUMP

### Main Features
Login
	- Personal Account
	- Organizer
		- Manage Users
	- super admin
Event Posts
	- Blog style
	- with tags and categories
	- Comments(optional)
Reporting

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

### Pages

1. Homepage
2. Login
3. Register
4. ToS (Terms of Service)
5. Privacy Policy
6. Contact Form
7. Search Results Page
8. Show events by category/tags page
9. Submit new Event post
10. Edit existing Event post
11. Event Views ( show event in a list)
12. Event Post
13. Public Profile for user
