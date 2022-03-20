// material
import {Container} from '@mui/material';
// components
import Page from '../../components/Page';
import data from '../../_mocks_/tests';
import TaskFilters from '../../sections/@dashboard/tasks/TaskFilters';
import {TaskList} from '../../sections/@dashboard/tasks';
import AddBtn from '../../components/AddBtn';

// ----------------------------------------------------------------------

export default function Tests() {
    return (
        <Page title="Тесты">
            <Container maxWidth="xl">
                <TaskFilters/>

                <TaskList tasks={tests}/>
                <br/>
                <br/>
                <TaskList tasks={data}/>

                <AddBtn path=""/>
            </Container>
        </Page>
    );
}
