import { Navigate } from "react-router-dom";

const PrivateRoute = ({ element: Element }) => {
  const token = localStorage.getItem("token");

  if (!token) {
    return <Navigate to="/login" />;
  }

  return <Element />;
};

export default PrivateRoute;