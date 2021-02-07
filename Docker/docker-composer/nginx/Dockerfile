FROM nginx:1.18.0-alpine
# nginx-alpine 体积比较小

RUN apk update && apk upgrade
# 安装 keepalived 等软件
# keepalived是一个类似于Layer2,4,7交换机制的软件。是Linux集群管理中保证集群高可用的一个服务软件，其功能是用来防止单点故障。
# ipvsadm LVS 管理工具
# openrc 重启作用
RUN apk add --no-cache bash curl ipvsadm iproute2 openrc keepalived

COPY entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]