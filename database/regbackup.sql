PGDMP         +                y            postgres    9.6.22    9.6.22     K           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            L           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            M           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            N           1262    12401    postgres    DATABASE     ?   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_India.1252' LC_CTYPE = 'English_India.1252';
    DROP DATABASE postgres;
             postgres    false            O           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                  postgres    false    2126                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            P           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    4                        3079    12387    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            Q           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    2                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                  false            R           0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                       false    1            ?            1259    16393    register    TABLE     j   CREATE TABLE public.register (
    username character varying NOT NULL,
    password character varying
);
    DROP TABLE public.register;
       public         postgres    false    4            H          0    16393    register 
   TABLE DATA               6   COPY public.register (username, password) FROM stdin;
    public       postgres    false    186   y       ?           2606    16400    register register_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.register
    ADD CONSTRAINT register_pkey PRIMARY KEY (username);
 @   ALTER TABLE ONLY public.register DROP CONSTRAINT register_pkey;
       public         postgres    false    186    186            H   7   x?K?H?,)J?4200??*-ɨ?/?H??	?s?g??L?R)???@?=... כ?     