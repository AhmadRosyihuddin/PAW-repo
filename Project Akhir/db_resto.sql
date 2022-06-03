/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     28/05/2022 10:16:10                          */
/*==============================================================*/


drop table if exists TB_CUSTOMER;

drop table if exists TB_MEJA;

drop table if exists TB_MENU;

drop table if exists TB_ORDER;

drop table if exists TB_ORDERDETAIL;

drop table if exists TB_PEMBAYARAN;

drop table if exists TB_USER;

/*==============================================================*/
/* Table: TB_CUSTOMER                                           */
/*==============================================================*/
create table TB_CUSTOMER
(
   ID_CUSTOMER          int not null,
   NO_MEJA              char(5),
   NAMA_USER            varchar(50),
   STATUS_USER          varchar(50),
   primary key (ID_CUSTOMER)
);

/*==============================================================*/
/* Table: TB_MEJA                                               */
/*==============================================================*/
create table TB_MEJA
(
   NO_MEJA              char(5) not null,
   STATUS_MEJA          varchar(20),
   primary key (NO_MEJA)
);

/*==============================================================*/
/* Table: TB_MENU                                               */
/*==============================================================*/
create table TB_MENU
(
   ID_MENU              int not null,
   NAMA_MENU            varchar(50),
   DESKRIPSI_MENU       varchar(255),
   JENIS_MENU           varchar(50),
   HARGA_MENU           varchar(50),
   STOCK                int,
   primary key (ID_MENU)
);

/*==============================================================*/
/* Table: TB_ORDER                                              */
/*==============================================================*/
create table TB_ORDER
(
   ID_ORDER             int not null,
   USERNAME             varchar(100),
   ID_CUSTOMER          int,
   ID_MENU              int,
   primary key (ID_ORDER)
);

/*==============================================================*/
/* Table: TB_ORDERDETAIL                                        */
/*==============================================================*/
create table TB_ORDERDETAIL
(
   ID_ORDER             int,
   JMLH_ORDER           int,
   TOTAL_HARGA          varchar(50)
);

/*==============================================================*/
/* Table: TB_PEMBAYARAN                                         */
/*==============================================================*/
create table TB_PEMBAYARAN
(
   ID_PEMBAYARAN        int not null,
   ID_CUSTOMER          int,
   TGL_PEMBAYARAN       datetime,
   primary key (ID_PEMBAYARAN)
);

/*==============================================================*/
/* Table: TB_USER                                               */
/*==============================================================*/
create table TB_USER
(
   USERNAME             varchar(100) not null,
   PASWORD              varchar(20),
   NAMA                 varchar(100),
   LEVEL                varchar(20),
   primary key (USERNAME)
);

alter table TB_CUSTOMER add constraint FK_DI_PESAN foreign key (NO_MEJA)
      references TB_MEJA (NO_MEJA) on delete restrict on update restrict;

alter table TB_ORDER add constraint FK_DAPAT_DI_AMBIL foreign key (ID_MENU)
      references TB_MENU (ID_MENU) on delete restrict on update restrict;

alter table TB_ORDER add constraint FK_DAPAT_MEMESAN foreign key (ID_CUSTOMER)
      references TB_CUSTOMER (ID_CUSTOMER) on delete restrict on update restrict;

alter table TB_ORDER add constraint FK_DAPAT_MENGAKSES foreign key (USERNAME)
      references TB_USER (USERNAME) on delete restrict on update restrict;

alter table TB_ORDERDETAIL add constraint FK_MELIHAT_DETAILORDER foreign key (ID_ORDER)
      references TB_ORDER (ID_ORDER) on delete restrict on update restrict;

alter table TB_PEMBAYARAN add constraint FK_DAPAT_MEMBAYAR foreign key (ID_CUSTOMER)
      references TB_CUSTOMER (ID_CUSTOMER) on delete restrict on update restrict;

