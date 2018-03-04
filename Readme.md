# php-interface-example

I am looking for a possibility to check, if an object fit to an interface, which is not implemented by the object.

I also asked the question at https://stackoverflow.com/questions/47533037/check-an-object-for-interface-which-is-not-impemented

## Example

You include `PackageA` to your project. This package is not yours.

In your own `PackageB` you have a `Service` which expects an interface you write yourself. And you also have a `TestUser` which fits to the `UserInterface`.

Now the user object of `PackageA` fits to the `UserInterface`, but you can not add this user object to the service method by typehinting the interface.

## possible solutions?

With the `example/index.php` the current code solutions will be shown.

1. check the fitting by reflections

  One solution can be -> delete the typehint and check it yourself like the `CompareService`.

2. create a pull request to `PackageA` and add an interface there

  Normally there should be a interface, but it could be a solution to add the interface to the possible external package.

3. use the decorator pattern

  An other way could be to use the decorator pattern. So the user object of `PackageA` will be given to an object of  `PackageB` which implements the `UserInterface`.

4. ???

  Is there any other, probably better solution? Or is there a plan for future php version to support something like that?