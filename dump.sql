--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

ALTER TABLE ONLY public."Publikasi" DROP CONSTRAINT publiaksi_lab_id;
ALTER TABLE ONLY public."Profil" DROP CONSTRAINT profil_user_id;
ALTER TABLE ONLY public."Pesan" DROP CONSTRAINT pesan_id;
ALTER TABLE ONLY public."LogBook" DROP CONSTRAINT log_id;
ALTER TABLE ONLY public."Lab_User" DROP CONSTRAINT lab_user_id;
ALTER TABLE ONLY public."Lab_User" DROP CONSTRAINT lab_lab_id;
ALTER TABLE ONLY public."Kegiatan" DROP CONSTRAINT kegiatan_id;
ALTER TABLE ONLY public."Lab" DROP CONSTRAINT id_ketua;
ALTER TABLE ONLY public."LogBook_Angoota" DROP CONSTRAINT fk_user_log;
ALTER TABLE ONLY public."Profil_Ketua" DROP CONSTRAINT fk_user_ketua;
ALTER TABLE ONLY public."Publikasi_Ketua" DROP CONSTRAINT fk_user1;
ALTER TABLE ONLY public."Profil_Anggota" DROP CONSTRAINT fk_user;
ALTER TABLE ONLY public."Publikasi_Ketua" DROP CONSTRAINT fk_pub;
ALTER TABLE ONLY public."Profil_Ketua" DROP CONSTRAINT fk_profil_ketua;
ALTER TABLE ONLY public."Profil_Anggota" DROP CONSTRAINT fk_profil;
ALTER TABLE ONLY public."LogBook_Angoota" DROP CONSTRAINT fk_log;
ALTER TABLE ONLY public."Anggota" DROP CONSTRAINT fk_anggota;
ALTER TABLE ONLY public."Dokumen" DROP CONSTRAINT dok_id_lab;
ALTER TABLE ONLY public."Publikasi_User" DROP CONSTRAINT blahblah;
ALTER TABLE ONLY public."Aset" DROP CONSTRAINT aset_id_lab;
ALTER TABLE ONLY public."Aktivitas" DROP CONSTRAINT aktiv_id;
ALTER TABLE ONLY public."Admin" DROP CONSTRAINT admin_id;
ALTER TABLE ONLY public."Publikasi_User" DROP CONSTRAINT "Publikasi_Anggota_id_user_fkey";
ALTER TABLE ONLY public."Ketua" DROP CONSTRAINT "Ketua_id";
ALTER TABLE ONLY public."Kategori_Dokumentasi" DROP CONSTRAINT "Kategori_Dokumentasi_id_kategori_fkey";
ALTER TABLE ONLY public."Kategori_Dokumentasi" DROP CONSTRAINT "Kategori_Dokumentasi_id_dokumentasi_fkey";
ALTER TABLE ONLY public."LogBook" DROP CONSTRAINT id;
ALTER TABLE ONLY public."User" DROP CONSTRAINT "User_pkey";
ALTER TABLE ONLY public."User" DROP CONSTRAINT "User_id_username_key";
ALTER TABLE ONLY public."Publikasi" DROP CONSTRAINT "Publikasi_pkey";
ALTER TABLE ONLY public."Publikasi_Ketua" DROP CONSTRAINT "Publikasi_Ketua_pkey";
ALTER TABLE ONLY public."Publikasi_User" DROP CONSTRAINT "Publikasi_Anggota_pkey";
ALTER TABLE ONLY public."Profil" DROP CONSTRAINT "Profil_pkey";
ALTER TABLE ONLY public."Profil_Ketua" DROP CONSTRAINT "Profil_Ketua_pkey";
ALTER TABLE ONLY public."Profil_Anggota" DROP CONSTRAINT "Profil_Anggota_Lab_pkey";
ALTER TABLE ONLY public."Pesan" DROP CONSTRAINT "Pesan_pkey";
ALTER TABLE ONLY public."LogBook" DROP CONSTRAINT "LogBook_pkey";
ALTER TABLE ONLY public."LogBook_Angoota" DROP CONSTRAINT "LogBook_Angoota_pkey";
ALTER TABLE ONLY public."Lab" DROP CONSTRAINT "Lab_pkey";
ALTER TABLE ONLY public."Lab_User" DROP CONSTRAINT "Lab_User_pkey";
ALTER TABLE ONLY public."Ketua" DROP CONSTRAINT "Ketua_pkey";
ALTER TABLE ONLY public."Kegiatan" DROP CONSTRAINT "Kegiatan_pkey";
ALTER TABLE ONLY public."Kategori" DROP CONSTRAINT "Kategori_pkey";
ALTER TABLE ONLY public."Kategori_Dokumentasi" DROP CONSTRAINT "Kategori_Dokumentasi_pkey";
ALTER TABLE ONLY public."Dokumen" DROP CONSTRAINT "Dokumentasi_pkey";
ALTER TABLE ONLY public."Aset" DROP CONSTRAINT "Aset_pkey";
ALTER TABLE ONLY public."Aset" DROP CONSTRAINT "Aset_id_key";
ALTER TABLE ONLY public."Anggota" DROP CONSTRAINT "Anggota_pkey";
ALTER TABLE ONLY public."Aktivitas" DROP CONSTRAINT "Aktivitas_pkey";
ALTER TABLE ONLY public."Admin" DROP CONSTRAINT "Admin_pkey";
ALTER TABLE public."Aset" ALTER COLUMN id DROP DEFAULT;
DROP TABLE public."User";
DROP SEQUENCE public."user";
DROP TABLE public."Publikasi_User";
DROP TABLE public."Publikasi_Ketua";
DROP TABLE public."Publikasi";
DROP SEQUENCE public.publikasi;
DROP TABLE public."Profil_Ketua";
DROP TABLE public."Profil_Anggota";
DROP TABLE public."Profil";
DROP TABLE public."Pesan";
DROP SEQUENCE public.pesan;
DROP TABLE public."LogBook_Angoota";
DROP TABLE public."LogBook";
DROP SEQUENCE public.sequence;
DROP TABLE public."Lab_User";
DROP TABLE public."Lab";
DROP SEQUENCE public.lab;
DROP TABLE public."Ketua";
DROP TABLE public."Kegiatan";
DROP SEQUENCE public.kegiatan;
DROP TABLE public."Kategori_Dokumentasi";
DROP TABLE public."Kategori";
DROP SEQUENCE public.kategori;
DROP TABLE public."Dokumen";
DROP SEQUENCE public.dokumen;
DROP SEQUENCE public."Aset_id_seq";
DROP TABLE public."Aset";
DROP TABLE public."Anggota";
DROP TABLE public."Aktivitas";
DROP SEQUENCE public.aktivitas;
DROP TABLE public."Admin";
DROP EXTENSION adminpack;
DROP EXTENSION plpgsql;
DROP SCHEMA public;
--
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Admin; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Admin" (
    id integer NOT NULL
);


ALTER TABLE public."Admin" OWNER TO postgres;

--
-- Name: aktivitas; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aktivitas
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aktivitas OWNER TO postgres;

--
-- Name: Aktivitas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Aktivitas" (
    id integer DEFAULT nextval('aktivitas'::regclass) NOT NULL,
    isi text NOT NULL,
    waktu character varying(20) NOT NULL,
    id_logbook integer NOT NULL,
    kategori character varying(20) NOT NULL
);


ALTER TABLE public."Aktivitas" OWNER TO postgres;

--
-- Name: Anggota; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Anggota" (
    id integer NOT NULL
);


ALTER TABLE public."Anggota" OWNER TO postgres;

--
-- Name: Aset; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Aset" (
    nama character varying(30) NOT NULL,
    jumlah integer NOT NULL,
    tahun integer NOT NULL,
    id_lab integer NOT NULL,
    id integer NOT NULL
);


ALTER TABLE public."Aset" OWNER TO postgres;

--
-- Name: Aset_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Aset_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Aset_id_seq" OWNER TO postgres;

--
-- Name: Aset_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Aset_id_seq" OWNED BY "Aset".id;


--
-- Name: dokumen; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE dokumen
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dokumen OWNER TO postgres;

--
-- Name: Dokumen; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Dokumen" (
    id integer DEFAULT nextval('dokumen'::regclass) NOT NULL,
    nama character varying(30) NOT NULL,
    waktu character varying(20) NOT NULL,
    id_lab integer NOT NULL,
    isi text
);


ALTER TABLE public."Dokumen" OWNER TO postgres;

--
-- Name: kategori; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE kategori
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kategori OWNER TO postgres;

--
-- Name: Kategori; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Kategori" (
    id integer DEFAULT nextval('kategori'::regclass) NOT NULL,
    nama character varying(50) NOT NULL
);


ALTER TABLE public."Kategori" OWNER TO postgres;

--
-- Name: Kategori_Dokumentasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Kategori_Dokumentasi" (
    id_dokumentasi integer NOT NULL,
    id_kategori integer NOT NULL
);


ALTER TABLE public."Kategori_Dokumentasi" OWNER TO postgres;

--
-- Name: kegiatan; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE kegiatan
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kegiatan OWNER TO postgres;

--
-- Name: Kegiatan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Kegiatan" (
    id integer DEFAULT nextval('kegiatan'::regclass) NOT NULL,
    nama character varying(50) NOT NULL,
    deskripsi text NOT NULL,
    waktu character varying(30) NOT NULL,
    id_lab integer NOT NULL,
    waktu_kegiatan date
);


ALTER TABLE public."Kegiatan" OWNER TO postgres;

--
-- Name: Ketua; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Ketua" (
    id integer NOT NULL
);


ALTER TABLE public."Ketua" OWNER TO postgres;

--
-- Name: lab; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE lab
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lab OWNER TO postgres;

--
-- Name: Lab; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Lab" (
    id integer DEFAULT nextval('lab'::regclass) NOT NULL,
    nama character varying(50) NOT NULL,
    profil text,
    id_ketua integer
);


ALTER TABLE public."Lab" OWNER TO postgres;

--
-- Name: Lab_User; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Lab_User" (
    id_user integer NOT NULL,
    id_lab integer NOT NULL
);


ALTER TABLE public."Lab_User" OWNER TO postgres;

--
-- Name: sequence; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sequence
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sequence OWNER TO postgres;

--
-- Name: LogBook; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "LogBook" (
    id integer DEFAULT nextval('sequence'::regclass) NOT NULL,
    nama_anggota character varying(50) NOT NULL,
    judul character varying(30) NOT NULL,
    id_lab integer NOT NULL,
    isi text
);


ALTER TABLE public."LogBook" OWNER TO postgres;

--
-- Name: LogBook_Angoota; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "LogBook_Angoota" (
    id_logbook integer NOT NULL,
    id_user integer NOT NULL
);


ALTER TABLE public."LogBook_Angoota" OWNER TO postgres;

--
-- Name: pesan; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pesan
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pesan OWNER TO postgres;

--
-- Name: Pesan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Pesan" (
    id integer DEFAULT nextval('pesan'::regclass) NOT NULL,
    pesan text NOT NULL,
    waktu character varying(20) NOT NULL,
    penerima character varying(50) NOT NULL,
    pengirim character varying(50) NOT NULL,
    id_user integer NOT NULL
);


ALTER TABLE public."Pesan" OWNER TO postgres;

--
-- Name: Profil; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Profil" (
    id integer NOT NULL,
    nama_depan character varying(20) NOT NULL,
    nama_belakang character varying(20) NOT NULL,
    ttl character varying(32),
    alamat character varying(50),
    telp character varying(15),
    avatar character varying(20)
);


ALTER TABLE public."Profil" OWNER TO postgres;

--
-- Name: Profil_Anggota; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Profil_Anggota" (
    id_user integer NOT NULL,
    id_profil integer NOT NULL
);


ALTER TABLE public."Profil_Anggota" OWNER TO postgres;

--
-- Name: Profil_Ketua; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Profil_Ketua" (
    id_user integer NOT NULL,
    id_profil integer NOT NULL
);


ALTER TABLE public."Profil_Ketua" OWNER TO postgres;

--
-- Name: publikasi; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE publikasi
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.publikasi OWNER TO postgres;

--
-- Name: Publikasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Publikasi" (
    id integer DEFAULT nextval('publikasi'::regclass) NOT NULL,
    tahun integer NOT NULL,
    pengarang character varying(100) NOT NULL,
    judul character varying(100) NOT NULL,
    id_lab integer
);


ALTER TABLE public."Publikasi" OWNER TO postgres;

--
-- Name: Publikasi_Ketua; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Publikasi_Ketua" (
    id_publikasi integer NOT NULL,
    id_user integer NOT NULL
);


ALTER TABLE public."Publikasi_Ketua" OWNER TO postgres;

--
-- Name: Publikasi_User; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Publikasi_User" (
    id_publikasi integer NOT NULL,
    id_user integer NOT NULL
);


ALTER TABLE public."Publikasi_User" OWNER TO postgres;

--
-- Name: user; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "user"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: User; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "User" (
    username character(32) NOT NULL,
    password character(32) NOT NULL,
    email character(32) NOT NULL,
    id integer DEFAULT nextval('"user"'::regclass) NOT NULL,
    role integer DEFAULT 3 NOT NULL
);


ALTER TABLE public."User" OWNER TO postgres;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Aset" ALTER COLUMN id SET DEFAULT nextval('"Aset_id_seq"'::regclass);


--
-- Data for Name: Admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Admin" (id) FROM stdin;
1
\.


--
-- Data for Name: Aktivitas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Aktivitas" (id, isi, waktu, id_logbook, kategori) FROM stdin;
\.


--
-- Data for Name: Anggota; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Anggota" (id) FROM stdin;
3
\.


--
-- Data for Name: Aset; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Aset" (nama, jumlah, tahun, id_lab, id) FROM stdin;
Laptop	99	2011	4	8
Bitcoin	500	1998	12	10
Mushi2	122	2012	5	11
adasdasd	1231	2345	8	13
werererer	45	2341	8	14
fsdfsd12	22	2014	5	15
test	11	1991	5	16
\.


--
-- Name: Aset_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Aset_id_seq"', 16, true);


--
-- Data for Name: Dokumen; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Dokumen" (id, nama, waktu, id_lab, isi) FROM stdin;
9	Laporan Keuangan Pookopang	2014-04-28 12:23:09	5	Laporan Keuangan Pookopang.txt
11	Untuk Lab B05 masbro	2014-04-30 09:19:29	8	Untuk Lab B05 masbro.txt
12	Test lagi	2014-05-05 08:53:08	5	Test lagi.pdf
13	Tes doang lagi	2014-05-05 09:21:55	5	Tes doang lagi.pdf
14	opop	2014-05-05 14:26:02	5	opop.pdf
\.


--
-- Data for Name: Kategori; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Kategori" (id, nama) FROM stdin;
\.


--
-- Data for Name: Kategori_Dokumentasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Kategori_Dokumentasi" (id_dokumentasi, id_kategori) FROM stdin;
\.


--
-- Data for Name: Kegiatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Kegiatan" (id, nama, deskripsi, waktu, id_lab, waktu_kegiatan) FROM stdin;
2	Hana	hanahanaahana yeaaahhh akhirnya bisa gue kodiingsssss \\m/	2014-04-26 06:07:15	4	\N
3	Hana	ohyeaaaahhh gue ngodiinggssss \\m/	2014-04-26 06:11:15	4	\N
4	Surabaya	Masdasdasdasd	2014-04-28 01:08:29	5	\N
\.


--
-- Data for Name: Ketua; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Ketua" (id) FROM stdin;
2
\.


--
-- Data for Name: Lab; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Lab" (id, nama, profil, id_ketua) FROM stdin;
8	Lab B05	DAPET A SEMUA	6
4	Cyber Security	Lab Cyber Security adalah salah satu Lab terbaru yang pernah ada di Fakultas kami	15
12	Lab Belapan	ahduadiuaf idgbuagdvaysgd	16
5	Pengolahan Citra	Halo halo beuhh	2
13	kekekekeke	kokokokokokok	\N
14	pokopang	asdasdasd	\N
\.


--
-- Data for Name: Lab_User; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Lab_User" (id_user, id_lab) FROM stdin;
7	4
6	8
15	4
16	12
2	5
17	4
8	5
9	5
14	12
3	4
3	13
\.


--
-- Data for Name: LogBook; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "LogBook" (id, nama_anggota, judul, id_lab, isi) FROM stdin;
4	user                            	asdasdasd	4	asdasdasd
\.


--
-- Data for Name: LogBook_Angoota; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "LogBook_Angoota" (id_logbook, id_user) FROM stdin;
\.


--
-- Data for Name: Pesan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Pesan" (id, pesan, waktu, penerima, pengirim, id_user) FROM stdin;
\.


--
-- Data for Name: Profil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Profil" (id, nama_depan, nama_belakang, ttl, alamat, telp, avatar) FROM stdin;
2	Ketua Lab Cyber	The Hacker A B	11/07/2013	kelas	789789	Profil_2.png
6	asdasdasd	asdasda	qe12312312	asdasvsf sdfsdf	67867	\N
3	Ahmad	Badrul Kamal	04/09/2014	Kyoto, 3rd Urakawa street	+98786654	5.png
15	Hana Hana	Hana Haan	04/09/2014	asdhajshdgjahsgdhasd	98989898	asd.png
14	Susi	Susanti	Bogor	Jalan Durian	123123132	
17	Papa 	Tibob	Bandung	asdasdas	978654	
8	Muhammad	Ihsan	Juni	kampung wates	879878798	Koala.jpg
9	Papa Mama	Adek kakak	04/07/2014	Jl Murah meriah	+98989	Profil_9.png
7	User baru tau	Bukan User baru	04/08/2014	asdasdasdasd	234234	Profil_7.png
1	Zaka	Zaidan Azminur	04/19/2014	hilang	1111111	Profil_1.png
16	Matekkampiun	asdasda	04/28/2014	Jalan Kebagusan banget keules	+123871293asdas	Profil_16.png
\.


--
-- Data for Name: Profil_Anggota; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Profil_Anggota" (id_user, id_profil) FROM stdin;
\.


--
-- Data for Name: Profil_Ketua; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Profil_Ketua" (id_user, id_profil) FROM stdin;
\.


--
-- Data for Name: Publikasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Publikasi" (id, tahun, pengarang, judul, id_lab) FROM stdin;
2	2014	Hahayde	Jenis Jenis Serangan.doc	12
3	1946	Kevin Mittnick	PengembanganPermainan-SeleksiProposalTahap.pdf	5
9	1997	Parampa	license.txt	4
11	2001	Mas Tukul ojo dumeh	license.txt	4
13	2014	Haji Mudin	LAPORAN TUGAS INDIVIDU DATA MINING.docx	5
14	1996	Haji Sueb	LAPORAN TUGAS INDIVIDU DATA MINING.docx	4
\.


--
-- Data for Name: Publikasi_Ketua; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Publikasi_Ketua" (id_publikasi, id_user) FROM stdin;
\.


--
-- Data for Name: Publikasi_User; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Publikasi_User" (id_publikasi, id_user) FROM stdin;
9	7
2	17
3	6
11	3
13	2
14	3
\.


--
-- Data for Name: User; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "User" (username, password, email, id, role) FROM stdin;
papa                            	4d2b31c91d33a32a98584546736d5c73	pop@popo.com                    	17	3
Matek                           	25f9e794323b453885f5181f1b624d0b	zaka@zaka.com                   	16	2
popok                           	4d2b31c91d33a32a98584546736d5c73	zaka@popok.com                  	6	2
kampret                         	4d2b31c91d33a32a98584546736d5c73	popok@popok.com                 	9	3
Hana                            	4d2b31c91d33a32a98584546736d5c73	hana@hana.com                   	15	2
user                            	4d2b31c91d33a32a98584546736d5c73	zaka.smansa@gmail.com           	3	3
ketua                           	4d2b31c91d33a32a98584546736d5c73	blabla@gmail.com                	2	2
admin                           	4d2b31c91d33a32a98584546736d5c73	zakazai@gmail.com               	1	1
userbaru                        	4d2b31c91d33a32a98584546736d5c73	userbaru@gmail.com              	7	1
aaa                             	4d2b31c91d33a32a98584546736d5c73	aaa                             	8	3
randy                           	4d2b31c91d33a32a98584546736d5c73	randy@r.com                     	14	3
\.


--
-- Name: aktivitas; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('aktivitas', 1, false);


--
-- Name: dokumen; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('dokumen', 14, true);


--
-- Name: kategori; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('kategori', 1, false);


--
-- Name: kegiatan; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('kegiatan', 4, true);


--
-- Name: lab; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('lab', 15, true);


--
-- Name: pesan; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pesan', 1, false);


--
-- Name: publikasi; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('publikasi', 15, true);


--
-- Name: sequence; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sequence', 4, true);


--
-- Name: user; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"user"', 18, true);


--
-- Name: Admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Admin"
    ADD CONSTRAINT "Admin_pkey" PRIMARY KEY (id);


--
-- Name: Aktivitas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Aktivitas"
    ADD CONSTRAINT "Aktivitas_pkey" PRIMARY KEY (id);


--
-- Name: Anggota_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Anggota"
    ADD CONSTRAINT "Anggota_pkey" PRIMARY KEY (id);


--
-- Name: Aset_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Aset"
    ADD CONSTRAINT "Aset_id_key" UNIQUE (id);


--
-- Name: Aset_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Aset"
    ADD CONSTRAINT "Aset_pkey" PRIMARY KEY (id);


--
-- Name: Dokumentasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Dokumen"
    ADD CONSTRAINT "Dokumentasi_pkey" PRIMARY KEY (id);


--
-- Name: Kategori_Dokumentasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Kategori_Dokumentasi"
    ADD CONSTRAINT "Kategori_Dokumentasi_pkey" PRIMARY KEY (id_dokumentasi, id_kategori);


--
-- Name: Kategori_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Kategori"
    ADD CONSTRAINT "Kategori_pkey" PRIMARY KEY (id);


--
-- Name: Kegiatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Kegiatan"
    ADD CONSTRAINT "Kegiatan_pkey" PRIMARY KEY (id);


--
-- Name: Ketua_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Ketua"
    ADD CONSTRAINT "Ketua_pkey" PRIMARY KEY (id);


--
-- Name: Lab_User_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Lab_User"
    ADD CONSTRAINT "Lab_User_pkey" PRIMARY KEY (id_user, id_lab);


--
-- Name: Lab_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Lab"
    ADD CONSTRAINT "Lab_pkey" PRIMARY KEY (id);


--
-- Name: LogBook_Angoota_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "LogBook_Angoota"
    ADD CONSTRAINT "LogBook_Angoota_pkey" PRIMARY KEY (id_logbook, id_user);


--
-- Name: LogBook_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "LogBook"
    ADD CONSTRAINT "LogBook_pkey" PRIMARY KEY (id);


--
-- Name: Pesan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Pesan"
    ADD CONSTRAINT "Pesan_pkey" PRIMARY KEY (id);


--
-- Name: Profil_Anggota_Lab_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Profil_Anggota"
    ADD CONSTRAINT "Profil_Anggota_Lab_pkey" PRIMARY KEY (id_user, id_profil);


--
-- Name: Profil_Ketua_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Profil_Ketua"
    ADD CONSTRAINT "Profil_Ketua_pkey" PRIMARY KEY (id_user, id_profil);


--
-- Name: Profil_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Profil"
    ADD CONSTRAINT "Profil_pkey" PRIMARY KEY (id);


--
-- Name: Publikasi_Anggota_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Publikasi_User"
    ADD CONSTRAINT "Publikasi_Anggota_pkey" PRIMARY KEY (id_publikasi, id_user);


--
-- Name: Publikasi_Ketua_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Publikasi_Ketua"
    ADD CONSTRAINT "Publikasi_Ketua_pkey" PRIMARY KEY (id_publikasi, id_user);


--
-- Name: Publikasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Publikasi"
    ADD CONSTRAINT "Publikasi_pkey" PRIMARY KEY (id);


--
-- Name: User_id_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "User"
    ADD CONSTRAINT "User_id_username_key" UNIQUE (id, username);


--
-- Name: User_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "User"
    ADD CONSTRAINT "User_pkey" PRIMARY KEY (id);


--
-- Name: id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "LogBook"
    ADD CONSTRAINT id UNIQUE (id);


--
-- Name: Kategori_Dokumentasi_id_dokumentasi_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Kategori_Dokumentasi"
    ADD CONSTRAINT "Kategori_Dokumentasi_id_dokumentasi_fkey" FOREIGN KEY (id_dokumentasi) REFERENCES "Dokumen"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: Kategori_Dokumentasi_id_kategori_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Kategori_Dokumentasi"
    ADD CONSTRAINT "Kategori_Dokumentasi_id_kategori_fkey" FOREIGN KEY (id_kategori) REFERENCES "Kategori"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: Ketua_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Ketua"
    ADD CONSTRAINT "Ketua_id" FOREIGN KEY (id) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: Publikasi_Anggota_id_user_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Publikasi_User"
    ADD CONSTRAINT "Publikasi_Anggota_id_user_fkey" FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: admin_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Admin"
    ADD CONSTRAINT admin_id FOREIGN KEY (id) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: aktiv_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Aktivitas"
    ADD CONSTRAINT aktiv_id FOREIGN KEY (id_logbook) REFERENCES "LogBook"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: aset_id_lab; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Aset"
    ADD CONSTRAINT aset_id_lab FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: blahblah; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Publikasi_User"
    ADD CONSTRAINT blahblah FOREIGN KEY (id_publikasi) REFERENCES "Publikasi"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: dok_id_lab; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Dokumen"
    ADD CONSTRAINT dok_id_lab FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_anggota; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Anggota"
    ADD CONSTRAINT fk_anggota FOREIGN KEY (id) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_log; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "LogBook_Angoota"
    ADD CONSTRAINT fk_log FOREIGN KEY (id_logbook) REFERENCES "LogBook"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_profil; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Profil_Anggota"
    ADD CONSTRAINT fk_profil FOREIGN KEY (id_profil) REFERENCES "Profil"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_profil_ketua; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Profil_Ketua"
    ADD CONSTRAINT fk_profil_ketua FOREIGN KEY (id_profil) REFERENCES "Profil"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_pub; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Publikasi_Ketua"
    ADD CONSTRAINT fk_pub FOREIGN KEY (id_publikasi) REFERENCES "Publikasi"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Profil_Anggota"
    ADD CONSTRAINT fk_user FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Publikasi_Ketua"
    ADD CONSTRAINT fk_user1 FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user_ketua; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Profil_Ketua"
    ADD CONSTRAINT fk_user_ketua FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user_log; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "LogBook_Angoota"
    ADD CONSTRAINT fk_user_log FOREIGN KEY (id_user) REFERENCES "User"(id);


--
-- Name: id_ketua; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Lab"
    ADD CONSTRAINT id_ketua FOREIGN KEY (id_ketua) REFERENCES "User"(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: kegiatan_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Kegiatan"
    ADD CONSTRAINT kegiatan_id FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: lab_lab_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Lab_User"
    ADD CONSTRAINT lab_lab_id FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: lab_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Lab_User"
    ADD CONSTRAINT lab_user_id FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: log_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "LogBook"
    ADD CONSTRAINT log_id FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: pesan_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Pesan"
    ADD CONSTRAINT pesan_id FOREIGN KEY (id_user) REFERENCES "User"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: profil_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Profil"
    ADD CONSTRAINT profil_user_id FOREIGN KEY (id) REFERENCES "User"(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: publiaksi_lab_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Publikasi"
    ADD CONSTRAINT publiaksi_lab_id FOREIGN KEY (id_lab) REFERENCES "Lab"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

