<!-- Word Frequency
Create a website in Silex that returns how frequently a word appears in a given string. The user should input both the word and the string of words to check. Check for full word matches only.

Before writing any code, write plain English specs in a text file, just like we've done in class. Commit these specs before coding.
Each spec should include specific input and output, and a description explaining why you chose these values, and the simplest way to test the behavior your spec addresses.
After creating English specs, Translate them one-by-one into PHPUnit test method. After writing a test method, make it pass. Commit as you go, and do not start writing your Silex app until all tests pass.
Use your tests to create a RepeatCounter class. It should contain a CountRepeats() method that takes two inputs: The word the user is searching for, and the string they are searching within. Your method should return the number of times the chosen word appears in the sentence.
After writing your method, create a Silex app to demonstrate it working. It should have 2 pages: One to present the user with a form asking for 2 strings: the word to search for, and the sentence they want to search. After the form is submitted, call the method you wrote and display the results on a second page.
Do not use regular expressions.
Do not refer to GitHub repos from present or former students or staff as reference. All work must be clearly identifiable as your own. -->

# _Word Counter_

#### _09/23/2016_

#### By _**Meredith Alcorn**_


## Description


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

    * _Navigate to the directory in which you want the project to reside_

    * _Enter the following command into your terminal:_
        _git clone https://github.com/mmalcorn/countrepeats.git_

    * _Navigate to the cloned directory, and execute the following command in the terminal:_
          _composer install_

    * _Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8889_

    * _Open up the browser of your choice and go to the following url:_
          _http://localhost:8889/_

    * _If you wish to look at the source code, feel free to browse through the files in the directory_


## Specs

    ### 1. User enters a word to search for within a sentence that contains the word once, and the number of times that word appears within that sentence is 1.
    * _Input: "The cat", "cat"_
    * _Output: 1_

    ### 2. User enters a word to search for within a sentence that contains the word twice, and the number of times that word appears within that sentence is 2.

    * _Input: "The cat is a cat", "cat"_
    * _Output: 2_

## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact me at:_
    _alcornmeredith@gmail.com_

## Technologies Used

* _silex v~2.0_
* _twig v~1.0_
* _phpunit v5.5.*_
