# PreUpVer Loader (1.0.0)

## Introduction

PreUpVer is a versatile JavaScript library designed to automatically update the version numbers of library scripts in your documentation. It identifies specific `<pre>` tags on your webpage and updates them with the latest version tag fetched from a specified repository, ensuring your documentation always displays up-to-date information.

## How It Works

PreUpVer operates by searching for `<pre>` tags with a designated class (`preupver`) and using their data attributes to perform version updates. It simplifies the process of keeping your library references up-to-date in documentation.

### Automatic Detection and Updating

When the webpage loads, PreUpVer finds all `<pre>` tags marked with the `preupver` class. It then extracts necessary details from their data attributes and updates each tag with the latest library version.

### Usage

1. **Marking `<pre>` Tags:**

   Add the `class="preupver"` to `<pre>` tags in your HTML and define the required data attributes for automatic updating:

   ```html
   <pre id="unique-id" class="preupver"
        data-api-url="https://api.github.com/repos/username/library/tags"
        data-description="Description of the library script"
        data-url="https://cdn.jsdelivr.net/gh/username/library@${version}/dist/library.min.js">
   </pre>
   ```

   Replace `unique-id`, `username`, `library`, and other placeholders with your specific details.

2. **Attributes Explained:**

   - `id`: A unique identifier for the `<pre>` tag.
   - `data-api-url`: The API URL to fetch the latest library version.
   - `data-description`: A brief description of the library script.
   - `data-url`: The URL of the script, where `${version}` will be replaced with the latest version number.

### Example

Check out the [tests](https://git.vdm.dev/Llewellyn/PreUpVer/src/branch/master/tests/) folder for the examples we use to test if this library works as expected.

# Build Details

+ *Author*: [Llewellyn van der Merwe](mailto:joomla@vdm.io)
+ *Name*: [PreUpVer Loader](https://git.vdm.dev/Llewellyn/PreUpVer)
+ *First Build*: 17th February, 2023
+ *Last Build*: 28th November, 2023
+ *Version*: 1.0.0
+ *Copyright*: Copyright (C) 2022. All Rights Reserved
+ *License*: GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html

> This **plugin** was build with a Joomla [Automated Component Builder](https://www.joomlacomponentbuilder.com).
> Developed by [Llewellyn van der Merwe](mailto:joomla@vdm.io)