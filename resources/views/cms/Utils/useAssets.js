import Vapor from "laravel-vapor";

export default function useAsset(path) {
    return Vapor.asset(path);
}
