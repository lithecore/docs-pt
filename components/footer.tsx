import Link from "next/link";

export default function Footer() {
  return (
    <footer className="border-t w-full h-16">
      <div className="container flex items-center justify-center h-full text-muted-foreground text-sm flex-wrap">
        <p className="text-center">
        Construído por{" "}
          <Link
            className="px-1 underline underline-offset-2"
            href="https://instagram.com/williamhumbwavali"
            target="_blank"
          >
            William Humbwavali
          </Link>.
          O código fonte está disponível no{" "}
          <Link
            className="px-1 underline underline-offset-2"
            href="https://github.com/lithecore/framework"
            target="_blank"
          >
            GitHub
          </Link>.
        </p>
      </div>
    </footer>
  );
}
