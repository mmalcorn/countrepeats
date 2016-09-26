# _Word Counter_

#### _09/23/2016_

#### By _**Meredith Alcorn**_


## Description

A website in Silex that returns how frequently a word appears in a given string. A user can input both the word and the string of words to check.

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

    ### 1. User enters a word to search for within a sentence that contains the word once. The number of times that word appears within the sentence is 1.
    * _Input: "The cat", "cat"_
    * _Output: 1_

    ### 2. User enters a word to search for within a sentence that contains the word twice. The number of times that word appears within the sentence is 2.

    * _Input: "The cat is a cat", "cat"_
    * _Output: 2_

    ### 3. User enters a word to search for within a sentence that does not contain the word. The number of time that words appears within the sentence is 0.

    * _Input: "The dog is a dog", "cat"_
    * _Output: 0_

## Known Bugs

_None yet_

## Support and Contact Details

_Please feel free to contact me at:_
    _alcornmeredith@gmail.com_

## Technologies Used

* _silex v~2.0_
* _twig v~1.0_
* _phpunit v5.5.*_

### License

*This application is licensed under the MIT license*

Copyright (c) 2016 **Meredith Alcorn**
