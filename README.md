# AkashNetLab Server Status Page

![Version](https://img.shields.io/badge/version-1.0-blue)
![PHP Version](https://img.shields.io/badge/php-8.2%2B-purple)

A lightweight server monitoring tool for keeping tabs on your network infrastructure.

## Why I Built This

I got tired of manually checking if my servers were online, especially when working with multiple services across my development environment. Instead of using complex enterprise monitoring solutions that felt like overkill, I created this simple status page that just works.

This tool gives you a clean view of what's up and running, and what might need your attention - perfect for small to mid-sized networks or homelab setups.

## Features

- Real-time status monitoring without the bloat
- Easy configuration - just add your servers to an array
- Clean, responsive UI that works on desktop and mobile
- Lightweight implementation with no external dependencies
- Visual indicators for immediate status recognition
- Auto-refresh capabilities so you don't need to mash F5

## How It Works

Nothing fancy here - the app uses PHP's `fsockopen()` function to check if your servers accept connections on specified ports. The results display in a clean table with color-coded indicators that update without page reloads.

I've kept the codebase minimal and dependency-free so you can deploy it just about anywhere.

## Tech Stack

- **Backend**: PHP 8.2 (but works fine with 7.4+ too)
- **Frontend**: Just vanilla JavaScript with Fetch API
- **UI**: Simple, clean CSS (no frameworks)

## Getting Started

1. Grab the code:
   ```bash
   git clone https://github.com/AkashNetLab/server-status-page.git



2. Drop the files on your web server (literally any PHP-capable server will do)

3. Update the $servers array in index.php with your own services:

 ```bash
$servicesRegistry = [
    ['label' => 'Web Server', 'address' => '192.168.1.1', 'port' => 80],
    ['label' => 'Database Server', 'address' => '192.168.1.2', 'port' => 3306],
```

4. Point your browser to wherever you deployed it and you're good to go!


## Troubleshooting

If all your services show as offline:

- Check if your web server can actually reach the services (firewall issues?)
- Make sure PHP isn't in safe mode blocking socket connections
- Check if the servers you're monitoring are actually running (I've definitely spent too much time debugging only to realize I forgot to start a service...)


## Future Plans

I might add these features if enough people find this useful:

- Uptime history tracking
- Email notifications when something goes offline
- Dark mode because my eyes hurt at night
- User authentication for public deployments


## License

This project is provided "as is" with no warranties. Use it, modify it, share it - just keep the copyright notice intact. See LICENSE.md for details.


Built by [AkashNetLab](https://github.com/AkashNetLab) with caffeine and curiosity.

If this saved you some time, a star on GitHub would be appreciated! ⭐

