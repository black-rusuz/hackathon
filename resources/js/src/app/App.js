// routes
import Router from './routes';
// theme
import ThemeConfig from './theme';
import GlobalStyles from './theme/globalStyles';
// components
import ScrollToTop from './components/ScrollToTop';
import {BaseOptionChartStyle} from './components/charts/BaseOptionChart';
import {HelmetProvider} from "react-helmet-async";
import {BrowserRouter} from "react-router-dom";

// ----------------------------------------------------------------------

export default function App() {
    return (
        <HelmetProvider>
            <BrowserRouter>
                <ThemeConfig>
                    <ScrollToTop/>
                    <GlobalStyles/>
                    <BaseOptionChartStyle/>
                    <Router/>
                </ThemeConfig>
            </BrowserRouter>
        </HelmetProvider>
    );
}
