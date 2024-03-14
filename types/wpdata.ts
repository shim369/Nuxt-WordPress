export interface Wpdata {
    id: number;
    title: {
        rendered: string;
    }
    thumbnail_url?: string;
    date: Date;
    content: {
        rendered: string;
    };
}