# IP-🧰

[![GitHub tag (latest SemVer)](https://img.shields.io/github/v/tag/DavidEredics/IP-toolbox?sort=semver)](https://github.com/DavidEredics/IP-toolbox/tags)
[![Docker Pulls](https://img.shields.io/docker/pulls/davideredics/ip-toolbox)](https://hub.docker.com/r/davideredics/ip-toolbox)
[![GitHub](https://img.shields.io/github/license/DavidEredics/IP-toolbox)](LICENSE)

API to get IP address and some simple info

## Available routes
| path | Content-Type | response |
|------|:------------:|:--------:|
| **/, /ip** | text/plain | ip address |
| **/hostname, /host** | text/plain | hostname |
| **/json, /json/ip** | application/json | ip address |
| **/json/hostname, /json/host** | application/json | hostname |

## License
[MIT](LICENSE)
