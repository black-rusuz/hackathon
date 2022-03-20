import {useRoutes} from 'react-router-dom';
// layouts
import DashboardLayout from './layouts/dashboard';
//
import Login from './pages/Login';
import Tests from './pages/Tests';
import Tasks from './pages/Tasks';
import User from './pages/User';
import NotFound from './pages/Page404';
import Auth from "./layouts/auth/Auth";

// ----------------------------------------------------------------------

export default function Router() {
    return useRoutes([
        {
            path: '/admin',
            element: <DashboardLayout/>,
            children: [
                {path: 'test', element: <Tests/>},
                {path: 'user', element: <User/>},
                {path: 'tasks', element: <Tasks/>}
            ]
        },
        {
            path: '/',
            element: <Auth/>,
            children: [
                {path: '404', element: <NotFound/>},
                // {path: 'login', element: <Login/>},
                // {path: '*', element: <Navigate to="/404"/>}
            ]
        }
    ]);
}
