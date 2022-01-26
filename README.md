Build Status Latest Stable Version License

Blueprint

Blueprint is an open-source tool for rapidly generating multiple Laravel components from a single, human readable definition.

Watch a quick demo of Blueprint in action and continue reading to get started.

Requirements
Blueprint requires a Laravel application running the latest stable release of Laravel, currently Laravel 8.x.

Installation
You can install Blueprint via composer using the following command:

composer require --dev laravel-shift/blueprint
Blueprint will automatically register itself using package discovery.

Additional Configuration: If you are running Laravel 8, or registering class-based routes or using the app/Models folder, you will need to configure Blueprint. Please review the Blueprint Docs for additional guidance.

Basic Usage
Blueprint comes with a set of artisan commands. The one you'll use the most is the blueprint:build command to generate the Laravel components:

php artisan blueprint:build [draft]
The draft file contains a definition of the components to generate.

Let's review the following, example draft file to generate some blog components:

models:
  Post:
    title: string:400
    content: longtext
    published_at: nullable timestamp
    author_id: id:user

controllers:
  Post:
    index:
      query: all
      render: post.index with:posts

    store:
      validate: title, content, author_id
      save: post
      send: ReviewPost to:post.author.email with:post
      dispatch: SyncMedia with:post
      fire: NewPost with:post
      flash: post.title
      redirect: post.index
From these simple 20 lines of YAML, Blueprint will generate all of the following Laravel components:

A model class for Post complete with fillable, casts, and dates properties, as well as relationships methods.
A migration to create the posts table.
A factory intelligently setting columns with fake data.
A controller class for PostController with index and store actions complete with code generated for each statement.
Routes for the PostController actions.
A form request of StorePostRequest validating title and content based on the Post model definition.
A mailable class for ReviewPost complete with a post property set through the constructor.
A job class for SyncMedia complete with a post property set through the constructor.
An event class for NewPost complete with a post property set through the constructor.
A Blade template of post/index.blade.php rendered by PostController@index.
Note: This example assumes features within a default Laravel application such as the User model and app.blade.php layout. Otherwise, the generated test may have failures.

Documentation
Browse the Blueprint Docs for full details on defining models, defining controllers, advanced configuration, and extending Blueprint.

Support Policy
Starting with version 2, Blueprint only generates code for the latest stable version of Laravel (currently Laravel 8). If you need to support older versions of Laravel, you may use version 1 or upgrade your application (try using Shift).

Blueprint still follows semantic versioning. However, it does so with respect to its grammar. Any changes to the grammar will increase its major version number. Otherwise, minor version number increases will contain new features. This includes generating code for future versions of Laravel.
