# Page

This is a self replicating web page: you replicate it yourself.  

There are several ways to do this:

1. You can create a sub-page to this one, which will be at [this web address]/[the name of your new page].
2. You can create your own free web page using [000webhost](https://www.000webhost.com/)
3. You can create a page on your own domain by buying a domain name(this can be as little as under 10 dollars)
4. You can create a physical local page using a Raspberry Pi or other local computer

In all cases what you will be doing is creating a new directory somewhere on the Internet, then copying the replicator program to that directory and running it.  The Replicator program will copy all the code to recreate this page.  Once the new page is created, you can replace this tutorial with whatever the actual content of that Page will be.  Just leave a link to this tutorial and new users will be able to spread the system and build new Pages.

To edit this, hit the pencil icon.  Then you can edit this text, delete it etc.  Think of this like a chalk board or dry erase board: anyone can edit or delete at any time.  But unlike a real chalk board, this whole thing self-replicates.  If you want a second chalk board, you have to go back to the chalk board store, buy another one, and take it home.  If you want another one of these, you can make a new directory and copy the files at zero cost in a few seconds.  This is the true power of information on the modern Internet: it can replicate in such a way that in theory one copy can become billions in a matter of hours.  

To make your own sub-page to this one, go in the address bar of your browser to the right-most "/" slash, and after that slash put in 

mkdir.php?dir=[name of your new page, all one word]

This should give you a link to the new page you just made, which has the replicator program in it.  Click through to your new page, then click on the replicator.php program to run it.  After it's run there should be a link to the main page, which will start out with a copy of this tutorial.  Edit this page to be whatever it should be, with a link back to this page for future people who copy the System.


To create your own page on [000webhost](https://www.000webhost.com/), go to the link, get a free account, and create a new file in your home web directory called replicator.php, and copy/paste the code from here:


[https://raw.githubusercontent.com/LafeLabs/page/master/php/replicator.txt](https://raw.githubusercontent.com/LafeLabs/page/master/php/replicator.txt)


into the file and save it.  Then go to your web page address which should be [name of your page].000webhostapp.com, and click on the link to replicator.php.  Wait for all files to copy, and click on the link back to your new page when done.

To get your own domain, the steps are the same, and with the same company, just buy a domain from them.  The company which creates 000webhost is [Hostinger](https://www.hostinger.com/).  It's cheap, easy to use, easy to scale up, has servers all over the world, and is worker-owned.  For this network buy domains that accurately describe a place, concept, or thing, with as obscure but also short a domain as possible. There is no reason not to use "bad" domains like ".biz", ".xyz" etc, since our goal is to have things that are easy to write down and share, not things where the domain itself is a brand, and we're not looking to create pages that are connected to the main web.  

Don't forget to link to the page your new page comes from!  Links in markdown are made with square brackets for the words of the link and parentheses for the address the link pionts at.  

```
[words](link address)
```

Add links to tutorials, links to your favorite pages, links to the page you were looking at before you made this page, and links to all the pages people make based on this one.

