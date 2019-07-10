
CREATE SEQUENCE public.notificacion_id_notificacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.notificacion_id_notificacion_seq OWNER TO postgres;

CREATE TABLE public.notificacion (
    id_notificacion integer DEFAULT nextval('public.notificacion_id_notificacion_seq'::regclass) NOT NULL,
    cedper integer,
    fecha_jornada date,
    depuniadm integer,
    ofiuniadm integer,
    minorguniadm integer,
    uniuniadm integer,
    prouniadm integer,

    comentario character varying(15),
    dia integer,
    id_tipo_notificacion integer,
    id_ausencia integer
);


ALTER TABLE public.notificacion OWNER TO postgres;
