#!/bin/bash 
set -e

prj_path=$(cd $(dirname $0); pwd -P)
prj_name=admin.jiabin.cn
config=socket_http

function run_cmd() 
{
    local t=`date`
    echo "$t: $1"
    eval $1
}

function list_functions()
{
    local var="$1"
    local str="$2"
    local val

    eval "val=\" \${$var} \""
    [ "${val%% $str *}" != "$val" ]
}

function start()
{
    run_cmd "echo 服务启动中..." 
    run_cmd "php ${prj_path}/main.php ${config}"
    run_cmd "echo 服务启动完成" 
}

function stop()
{
    run_cmd "echo 服务关闭中..." 
    run_cmd "ps -ef | grep ${prj_name} | grep -v grep | awk '{print \$2'} | xargs kill"
    run_cmd "echo 服务关闭完成" 
}

function restart()
{
    run_cmd "echo 服务重启中..." 
    stop
    start
    run_cmd "echo 服务重启完成" 
}

function reload()
{
    run_cmd "echo 服务重载中..." 
    run_cmd "ps -ef | grep ${prj_name} | grep manager | grep -v grep | awk '{print \$2'} | xargs kill -USR1"
    run_cmd "echo 服务重载完成" 
}

function help() {
    cat <<-EOF
        Usage: manager.sh [options]
        Valid options are:
        start 
        stop 
        restart 
        reload 
        -h                      show this help message and exit
EOF
}

action=${1:-help}
ALL_COMMANDS="start stop restart reload"
list_functions ALL_COMMANDS "$action" || action=help
$action "$@"
